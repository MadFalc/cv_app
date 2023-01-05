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

// INCLUDE THE CONTROLLERS YOU NEED HERE.
use App\HTTP\Controllers\PersonController;

// HERE I REDIRECT MY DEFAULT ROUTE TO MY PERSONS.
Route::get('/', [PersonController::class, 'index']);
  
Route::resource('person', PersonController::class);