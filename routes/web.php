<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\LogoutController;
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

Route::get('/home', [ChecklistController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

// Route::get('/actor', [ActorController::class, 'index']);
// Route::get('/actor/{id}', [ActorController::class, 'index']);

Route::get('/cities', [CitiesController::class, 'index']);
Route::get('/cities/{id}', [CitiesController::class, 'getCountry']);

Route::get('/countries',[CountriesController::class,'index']);
Route::get('/countries/{id}',[CountriesController::class,'index']);