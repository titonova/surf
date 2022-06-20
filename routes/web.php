<?php

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

use App\Http\Livewire\Test;
use Wave\Support\Facades\Wave;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Wave routes
Wave::routes();


Route::get('/test', Test::class);
