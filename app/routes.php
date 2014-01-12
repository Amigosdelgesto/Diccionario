<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello', array('categories' => Category::all()));
});

Route::get('admin', function()
{
    return View::make('admin', array('categories' => Category::all()));
});

Route::get('category/{id}', function($id)
{
    return View::make('category', array('category' => Category::findOrFail($id)));
});

Route::post('category', 'CategoryController@newCategory');
Route::post('gesture', 'GestureController@newGesture');