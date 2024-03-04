<?php

namespace App\Http\Controllers\Map;

use App\Http\Requests\MarkerRequest;
use App\Models\MarkerData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MarkerController
{
    public function all()
    {
        $markers = MarkerData::pluck('geo_json', 'id')->toArray();
        foreach ($markers as $key => &$value) {
            $value['properties']['id'] = $key;
        }
        unset($value);

        return response()->json([
            'markers' => array_values($markers),
        ]);
    }

    public function store(MarkerRequest $markerRequest)
    {
        $validatedData = $markerRequest->validated();


        $markerData = MarkerData::create($validatedData);
        if ($markerRequest->hasFile('photos')) {
            $photos = $markerRequest->file('photos');
            foreach ($photos as $photo) {
//                $photoPath = $photo->store('uploads');
                $photoPath = Storage::disk('public')->put('images', $photo);
                $markerData->files()->create(['path' => $photoPath]);
                $validatedData['photos'][] = $photoPath;
            }
        }
        if ($markerRequest->hasFile('expert_report')) {
            $file = $markerRequest->file('expert_report');
            $filePath = Storage::disk('public')->put('reports', $file);
            $markerData->expert_report = $filePath;
            $validatedData['expert_report'] = $filePath;
        }

        $latitude = $markerRequest->input('lat');
        $longitude = $markerRequest->input('lng');

        $markerData->geo_json = $this->createGeoJson($validatedData, [$longitude, $latitude]);
        $markerData->geom = DB::raw("ST_GeomFromText('POINT({$longitude} {$latitude})')");

        $markerData->save();


        return response()->json([
            'data' => $markerData->geo_json,
        ]);
    }

    public function delete(MarkerData $marker)
    {
        $marker->delete();

        return response()->json([
            'status' => true,
        ]);
    }

    public function info(MarkerData $marker)
    {
        $markerView = view('map.info', ['marker' => $marker])->render();

        return response()->json([
            'marker_table' => $markerView
        ]);
    }

    private function createGeoJson($attributes, $coordinates)
    {
        $geoJsonFeature = [
            'type' => 'Feature',
            'properties' => $attributes,
            'geometry' => [
                'type' => 'Point',
                'coordinates' => $coordinates,
            ],
        ];

        return $geoJsonFeature;
    }
}
