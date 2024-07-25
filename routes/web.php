<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkirtController;
use App\Http\Controllers\GuzzleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BodiceController;
use GuzzleHttp\Client;


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
// ------------HOME PAGE------------
Route::get('/', [HomeController::class, 'index']);


// ------------SKIRT PATTERN------------
Route::get('/skirt', [SkirtController::class, 'show'])->name('clients');

Route::post('/skirtPattern', [GuzzleController::class, 'intent'])->name('skirt.pattern');

// ------------BODICE PATTERN PAGE------------
Route::get('/bodice', [BodiceController::class, 'show']);


Route::get('/skirt/{id}', [GuzzleController::class, 'showSkirt'])->name('result');

//Route::match(['post', 'get'], '/waist', [GuzzleController::class, 'intent2']);
Route::get('/waist', [GuzzleController::class, 'intent2'])->name('skirt.waist');

//Route::get('/info', [GuzzleController::class, 'patternInfo']);

// ------------CLIENT PAGE------------
Route::get('/client', [ClientController::class, 'index']);

Route::get('/newClient', [ClientController::class, 'create']);

Route::post('/client', [ClientController::class, 'store']);

Route::get('/client/{id}', [ClientController::class, 'show'])->name('clientshow');


//Route::get('/skirt', [SkirtController::class, 'create'])->name('result');

// Route::get('/base/{id}', [GuzzleController::class, 'getBasePattern'])->where('id', '[0-9]')->name('getBbase');

//Route::get('/skirt/{id}', [ClientController::class, 'show'])->name('clients');

//Route::get('/skirtPattern', [SkirtController::class, 'show']);


// Route::post('/skirt', [GuzzleController::class, 'insertSkirt']);


//Route::get('/skirt', [ClientController::class, 'show']);


// Route::get('/skirtPattern', [GuzzleController::class, 'getSkirt']);

//Route::get('/skirt/{skirt}', [SkirtController::class, 'show']);

//Route::get('/skirt/{skirt}', [GuzzleController::class, 'getsSkirt']);