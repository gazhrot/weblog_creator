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
    return view('files/home');
});

Route::get('/register', 'Auth\AuthController@showRegistrationForm');
Route::post('/register', 'Auth\AuthController@register');

Route::get('/login', function () { return view('files/login'); });
Route::post('/login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');

Route::get('/edit', function () {
    return view('files/editprofil');
});

Route::get('/article', function () { return view('files/article'); });


Route::post('/article', 'ArticleController@create');
Route::post('/categorie', 'CategorieController@create');
Route::post('/blog', 'BlogController@create');