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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('equipe', 'equipeController');


// Route::get('/enigme1bl', function () {
//     return view('bleue.enigme1bl');
// });

// Route::get('/enigme2bl', function(){
//     return view('bleue.enigme2bl');
// });

// Route::get('/enigme3bl', function(){
//     return view('bleue.enigme3bl');
// });


