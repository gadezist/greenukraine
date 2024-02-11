<?php

namespace App\Http\Requests;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function map()
    {
        return view('map');
    }
}
