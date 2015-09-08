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

Route::get('about', function () {

	return view('about');
});

Route::get('contact', function () {

	return view('contact');
});

Route::get('types', function () {

	$type = \App\Models\Type::find(2);

	return view('types',['type'=>$type]);

	// return view('types',compact("type"));  same as previos 
	
});