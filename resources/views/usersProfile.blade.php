@extends('templates.main')


@section('content')	

	<h2>My Profile</h2>

	<h5>User Name</h5>
	<h4>{{$user->username}}</h4>

	<h5>Email</h5>
	<h4>{{$user->email}}</h4>

	<h5>First Name</h5>
	<h4>{{$user->firstname}}</h4>

	<h5>Last Name</h5>
	<h4>{{$user->lastname}}</h4>

		
@stop