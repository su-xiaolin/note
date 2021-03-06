<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/520/{sweet}', function($sweet) {
	// dump($sweet);
	//echo '520';die;
	// app/routes.php
	return View::make('hello', ['sweet' => $sweet]);
});

Route::get('/notes', ['uses' => 'NoteController@index']);
Route::get('/note-add', ['uses' => 'NoteController@add']);
Route::post('/note-save', ['as' => 'note-adve', 'uses' => 'NoteController@save']);