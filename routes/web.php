<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
    return view('listings', [
        'listings' => Listing::all()
    ]);
});

//Single listing
Route::get('/listings/{listing}', function (Listing $listing) {
    if ($listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
});
