<?php

use App\Http\Controllers\Jobs\ListingsController as JobsListingsController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\NoteController;
use App\Http\Livewire\Listings;
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

Route::get('/tasks', [NoteController::class, 'index']);
// Route::get('/jobs', [ListingsController::class, 'index']);
Route::resource('/jobs', JobsListingsController::class);

// Route::get('/jobs',Listings::class);
