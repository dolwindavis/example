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
Route::get('begin',function(){
	// Session()->flash('flash_message','loggged in');
	// Session()->flash('flash_message_level','info');
	flash('you are now loggged in','error');
	return redirect('/');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('cards','CardsController@index');
Route::get('cards/{card}','CardsController@show');

Route::post('cards/{card}/notes','NotesController@store');
Route::get('/notes/{note}/edit','NotesController@edit');
Route::patch('/notes/{note}','NotesController@update');
Auth::routes();

Route::get('/dashboard', 'HomeController@index');
