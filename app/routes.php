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
	return View::make('hello', array('categories' => Category::orderBy('nombre', 'ASC')->get()));
});

Route::get('admin', function()
{
    return View::make('admin', array('categories' => Category::orderBy('nombre', 'ASC')->get()));
});

Route::get('categories/{id}', function($id)
{
    return View::make('category', array('category' => Category::findOrFail($id)));
});

Route::get('gestures/{id}', function($id)
{
    $gesture = Gesture::findOrFail($id);
    $next = Gesture::where('titulo', '>', $gesture->titulo)->orderBy('titulo', 'ASC')->first();
    $previous = Gesture::where('titulo', '<', $gesture->titulo)->orderBy('titulo', 'DESC')->first();
    $category = Categorie::findOrFail($gesture->id_categoria);

    return View::make('gesture', array(
        'gesture' => $gesture,
        'next' => $next,
        'previous' => $previous,
        'category' => $category,
        )
    );
});

Route::post('categories', 'CategoryController@newCategory');
Route::post('gestures', 'GestureController@newGesture');