<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\SeriesCastController;
use App\Http\Controllers\SeriesController;
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
    return view('index');
});

Route::get('/series', [SeriesController::class, 'index']);

Route::get('/casts', [CastController::class, 'index']);
Route::get('/series/cast', [SeriesCastController::class, 'index']);
Route::get('/series/{$id}', [SeriesController::class, 'show']);
