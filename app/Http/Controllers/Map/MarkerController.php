<?php

namespace App\Http\Controllers\Map;

use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\MarkerRequest;
use App\Models\MarkerData;
use App\Models\News;
use Illuminate\Support\Facades\DB;

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
                $photoPath = $photo->store('public');
                $markerData->files()->create(['path' => $photoPath]);
                $validatedData['photos'][] = $photoPath;
            }
        }
        if ($markerRequest->hasFile('expert_report')) {
            $file = $markerRequest->file('expert_report');
            $filePath = $file->store('public');
            $markerData->expert_report = $filePath;
            $validatedData['expert_report'] = $filePath;
        }

        $latitude = $markerRequest->input('lat');
        $longitude = $markerRequest->input('lng');

        $markerData->geom = DB::raw("ST_GeomFromText('POINT({$longitude} {$latitude})')");
        $markerData->geo_json = $this->createGeoJson($validatedData, [$longitude, $latitude]);

        $markerData->save();

        return response()->json([
            'data' => $markerData->geo_json,
        ]);
    }

    public function update(NewsRequest $newsRequest, News $news)
    {
        $validatedData = $newsRequest->validated();

        if ($newsRequest->hasFile('image')) {
            $image = $newsRequest->file('image');

            $filePath = $image->store('public');
            $validatedData['image'] = $filePath;
        }

        $news->update($validatedData);

        return redirect()->route('admin.news')->with('success', 'News updated successfully');
    }

    public function delete(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully');
    }

    public function info(MarkerData $marker)
    {

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

        return json_encode($geoJsonFeature);
    }
}
