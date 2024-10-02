<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, "getAllProfiles"]);
Route::get('/profile/{id}', [ProfileController::class, "getProfile"]);

Route::get('/hi', function () {
    return view('hi');
});