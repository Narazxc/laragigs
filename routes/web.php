<?php

use App\Models\Listing;
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

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listing',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listings/{listing}', function(Listing $listing){




    // return view('listing', [
    //     'listing' => Listing::findOrFail($id) // findOrFail method: If no $id match render 404 page, no need for if/else check
    // ]);

        return view('listing', [
        'listing' => $listing
    ]);


});