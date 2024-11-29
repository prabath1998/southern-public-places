<?php

use App\Http\Controllers\PublicPlacesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/public-places', [PublicPlacesController::class, 'index']);

Route::get('/fetch-public-places', [PublicPlacesController::class, 'fetchPublicPlaces']);

