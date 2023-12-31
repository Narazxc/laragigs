<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index (Request $request) 
    {
        // dependency injection or helper function (to get the query parameter)
        // filter listing tag by scope filter

        // dd($request->tag);
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }



    public function show (Listing $listing) 
    {

        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
