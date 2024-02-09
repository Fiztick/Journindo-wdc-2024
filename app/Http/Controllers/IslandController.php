<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    public function show(string $name)
    {
        $name = str_replace('-', ' ', $name);
        // dd($name);
        $islands = Island::with('regions.places')->where('name', $name)->get();

        return view('pulau', compact('islands'));
    }

    public function data()
    {
        $islands = Island::with('regions.places')->get();

        return response()->json($islands, 200);
    }
}
