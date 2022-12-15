<?php

namespace App\Http\Controllers;

class MapController extends Controller
{
    public function gmap()
    {
        return view('pages.map-gmap');
    }
}
