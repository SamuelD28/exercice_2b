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

Route::resource('personnages', 'PersonnageController');

Route::get('/', function(){
    return view('welcome');
});

/**
 * The above line creates all the routes below.
 */
// Route::get('personnages', 'PersonnageController@index');
// Route::get('personnages/create', 'PersonnageController@create');
// Route::post('personnages', 'PersonnageController@store');
// Route::get('personnages/{personnage}', 'PersonnageController@show');
// Route::get('personnages/{personnage}/edit', 'PersonnageController@edit');
// Route::put('personnages/{personnage}', 'PersonnageController@update');
// Route::delete('personnages/{personnage}', 'PersonnageController@destroy');