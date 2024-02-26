<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    protected string $jsonFilePath = "geo_json/";

    public function getGeoJson(Request $request)
    {
        $filename = $request->post('filename');
        $data = Storage::json($this->jsonFilePath . $filename);

        return response()->json([
            'data' => $data,
        ]);
    }
}
