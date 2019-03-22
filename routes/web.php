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

// Route::middleware(['enigme1bl', 'enigme2bl'])->group(function () {
// Route::get('equipe/', function () {
//       return view('bleue.enigme1bl');
      
//       Route::get('equipe/1/', function () {
//           return view('bleue.enigme2bl');
//       });
// });
// });

Route::resource('equipe', 'equipeController');

Route::get('equipe/1', function (){
    return view('bleue.enigme1bl'); 
});

// Route::post('equipe/1/a2a', function (){
//     return view('bleue.enigme2bl');
// });
// Route::get('equipe/1/a2a', function (){
//     return view('bleue.enigme2bl');
// });
    
// Route::post('equipe/1/a2a3a', function (){
//     return view('bleue.enigme3bl');
// });

// Route::post('equipe/1/a2a3a4a', function (){
//     return view('bleue.enigme4bl');
// });

// Route::post('equipe/1/a2a3a4a5a', function (){
//     return view('bleue.enigme5bl');
// });

Route::get('equipe', 'equipeController@create');
Route::post('equipe', 'equipeController@store');


// Route::post('/bleue/enigme2bl', function(){
//     return view('bleue.enigme2bl'); 
// });

// Route::get('/bleue/enigme2bl', function(){
//     return view('bleue.enigme2bl');
// });

// Route::get('/enigme1bl', function () {
//     return view('bleue.enigme1bl');
// });

// Route::get('/enigme2bl', function(){
//     return view('bleue.enigme2bl');
// });

// Route::get('/enigme3bl', function(){
//     return view('bleue.enigme3bl');
// });


