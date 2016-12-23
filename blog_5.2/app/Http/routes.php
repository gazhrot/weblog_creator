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

/* INDEX */
Route::get('/', function () {
	if (Illuminate\Support\Facades\Auth::check())
		return redirect('/office');
	else
		return view('files/home'); 
});

/* LOGIN / REGISTER */
Route::get('/register', 'Auth\AuthController@showRegistrationForm');
Route::post('/register', 'Auth\AuthController@register');

Route::get('/login', function () { return view('files/login'); });
Route::post('/login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');


Route::group(['before' => 'auth'], function () {
	Route::get('/edit', function () { return view('files/creatblog'); });
	Route::get('/office', function () { 
		$blog = App\Blog::where('user_id', Illuminate\Support\Facades\Auth::user()->id)->get();
		return view('files/office', ['blog' => $blog]); 
	});
	Route::get('/friend', function () { return view('files/friend'); });
	Route::get('/profil', function () { return view('files/profil'); });
	Route::get('/messagerie', function () { return view('files/messagerie '); });
	Route::get('/write', function () { return view('files/write '); });
	Route::get('/editcat/{id?}', function ($id = 1) {
		
		if ($id) {
			$all_cat = App\Categorie::where('blog_id', $id)->get();
			$blog = App\Blog::where('id', $id)->get();
		}

		return view('files/editcat', ['blog' => $blog, 'categorie' => $all_cat]); 
	});
	Route::get('/article/{id}', function ($id) {
		$current_blog = App\Blog::findOrFail($id)->get();
		return view('files/article', ['current' => $current_blog]);
	});
	Route::post('/article', 'ArticleController@create');
	Route::post('/categorie/{id}', 'CategorieController@create');
	Route::post('/blog', 'BlogController@create');
});