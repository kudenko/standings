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

Route::get('/st', function () {
    return view('standings');
});

Route::get('/add', function (){
    return view('creation');
})->name('/add');

Route::get('/', 'StandingsController@showTournaments') -> name ('/');



Route::post('create', 'StandingsController@create');



