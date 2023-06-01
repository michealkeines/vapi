<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vapi', function () {
    return view('index');
});

Route::get('/openapi.json', function () {
    // Read the JSON file
    $path = resource_path('views/api.json');
    $json = file_get_contents($path);
    // Return JSON response
    return response($json)
        ->header('Content-Type', 'application/json');
});
