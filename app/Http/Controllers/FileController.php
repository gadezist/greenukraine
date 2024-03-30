<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    protected string $geoJsonFilePath = "geo_json/";
    protected string $topoJsonFilePath = "topo_json/";

    public function getGeoJson(Request $request)
    {
        $filename = $request->post('filename');
        $data = Storage::json($this->geoJsonFilePath . $filename . '.geojson');

        return response()->json([
            'data' => $data,
        ]);
    }

    public function getTopoJson(Request $request)
    {
        $filename = $request->post('filename');
        $data = Storage::json($this->topoJsonFilePath . $filename . '.topojson');

        return response()->json([
            'data' => $data,
        ]);
    }
}
