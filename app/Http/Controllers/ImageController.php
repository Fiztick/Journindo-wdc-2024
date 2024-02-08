<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function data()
    {
        $img = Image::all();

        return response()->json($img, 200);
    }
}
