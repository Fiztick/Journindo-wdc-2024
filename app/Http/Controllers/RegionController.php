<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function data()
    {
        $regions = Region::with('images')->get();

        return response()->json($regions, 200);
    }
}
