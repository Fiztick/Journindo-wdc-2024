<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    public function data()
    {
        $islands = Island::with('regions.images')->get();

        return response()->json($islands, 200);
    }
}
