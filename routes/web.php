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

// THE DEFAULT LARAVEL ROUTES ARE: INDEX, SHOW, CREATE, SHOW, EDIT, UPDATE, DESTROY
// THE ROUTE STRUCTURE LOOKS LIKE THIS: Route::get('url', [Controller::class, 'function']);
// YOU CAN USE THE PHP ARTISAN ROUTE LIST FUNCTION TO SHOW ALL YOUR ROUTES IN THE CONSOLE.
Route::get('/person', [PersonController::class, 'index'])->name('person.index');

// ROUTE RESOURCES ARE USED TO COMBINE ALL YOUR BASIC ROUTES.
Route::resource('/person', PersonController::class);