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

	// $product = \App\Models\Product::find(1);
	// return $product->type;

	// $type = \App\Models\Type::find(2);
	// return $type->products;

	// $users = \App\Models\User::all();
	// return $users;

	// $order = \App\Models\Order::find(2);
	// return $order->user;

	// $user = \App\Models\User::find(1);
	// return $user->orders;

	// $order = \App\Models\Order::find(1);
	// return $order->products;

    //return view('welcome');

	// $type = new \App\Models\Type();
	// $type->name = "Shark";
	// $type->save();

	// return $type;

	// $user = \App\Models\User::create([
	// 	"username"=>"JoeJai",
	// 	"firstname"=>"JoeJai",
	// 	"lastname"=>"Jai",
	// 	"email"=>"joe.jai@gmail.com",
	// 	"password"=>"bla"
	// 	]);

	// return $user;

	return view('welcome');

});

Route::get('about', "PagesController@showAbout");

Route::get('contact', "PagesController@showContact");

// Route::get('types/{id}', function ($id) {});

Route::resource('types', 'TypesController');

// Route::get('products/create', "ProductsController@create");

// Route::post('products', "ProductsController@store");

// Route::get('products/{id}/edit', "ProductsController@edit");

// Route::put('products/{id}', "ProductsController@update");

Route::resource('products', 'ProductsController');


// Route::get('users/create', "");

// Route::get('users/{id}', function($id){});

// Route::post('users', function( $request){});

// Route::get('users/{id}/edit', function($id){});

// Route::put('users/{id}', function($id,  $request){});

Route::resource('users', 'UsersController');

Route::get('login', "LoginController@showLoginForm");

Route::post('login', "LoginController@processLogin");

Route::get('logout', "LoginController@logout");

Route::get('cart', "CartController@showCart");