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



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/series', [SeriesController::class, 'index']);

    Route::get('/casts', [CastController::class, 'index']);
    Route::get('/series/cast', [SeriesCastController::class, 'index']);
    Route::get('/series/{id}', [SeriesController::class, 'show']);
    Route::get('/create/serie', [SeriesController::class, 'create']);
    Route::post('/post/serie', [SeriesController::class, 'store']);
    Route::delete('/delete/serie/{id}', [SeriesController::class, 'destroy']);
    Route::patch('edit/{id}/serie', [SeriesController::class, 'edit']);
    Route::put('edit/serie/{id}', [SeriesController::class, 'update']);
  

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
require __DIR__ . '/auth.php';
