@extends('templates.main')


@section('content')		
			<h2>Edit Details</h2>
			

			{!! Form::model($user, array('url' => 'users/'.$user->id,'method'=>'put')) !!}
				<fielset>
					{!! Form::label('username', 'User Name') !!}
					{!! Form::text('username') !!}
					{!! $errors->first('username','<p class="error">:message</p>') !!}

					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email') !!}
					{!! $errors->first('email','<p class="error">:message</p>') !!}

					{!! Form::label('firstname', 'First Name') !!}
					{!! Form::text('firstname')!!}
					{!! $errors->first('firstname','<p class="error">:message</p>') !!}

					{!! Form::label('lastname', 'Last Name') !!}
					{!! Form::text('lastname')!!}
					{!! $errors->first('lastname','<p class="error">:message</p>') !!}
					
	
					<input type="submit" value="Edit">
				</fielset>
			{!! Form::close() !!}
@stop