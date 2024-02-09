<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\IslandController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\RegionController;
use App\Models\Island;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $islands = Island::with('regions.places')->get();

    $placesArray = [];

    foreach ($islands as $island) {
        foreach ($island->regions as $region) {
            foreach ($region->places as $image) {
                // Add image data to the array
                $placesArray[] = [
                    'name' => $image->name,
                    'island_name' => $island->name,
                    'region_name' => $region->name,
                    'image' => $image
                ];
            }
        }
    }

    // dd($imagesArray);

    return view('welcome', compact('islands'));
});

// Route::get('/pulau/{nama-pulau}', [IslandController::class, 'index'])->name('island.index');
Route::resource('/pulau', IslandController::class);

Route::get('/island/data', [IslandController::class, 'data'])->name('island.data');
Route::get('/region/data', [RegionController::class, 'data'])->name('region.data');
Route::get('/places/data', [PlaceController::class, 'data'])->name('places.data');

