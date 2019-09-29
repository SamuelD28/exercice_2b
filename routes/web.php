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


/**
 * Declare a resourcefull route for managing the personnage model.
 * Delegate all routes starting with personnages to the personnage controller
 * class. All the routes follow the rest standard listed below.
 */

Route::resource('characters', 'CharacterController');
Route::resource('characters/{id}/equipments', 'EquipmentController', [
    'store'
]);

Route::get('/', function(){
    return view('welcome');
});

/**
 * The above line creates all the routes below.
 */
// Route::get('personnages', 'CharacterController@index');
// Route::get('personnages/create', 'CharacterController@create');
// Route::post('personnages', 'CharacterController@store');
// Route::get('personnages/{personnage}', 'CharacterController@show');
// Route::get('personnages/{personnage}/edit', 'CharacterController@edit');
// Route::put('personnages/{personnage}', 'CharacterController@update');
// Route::delete('personnages/{personnage}', 'CharacterController@destroy');