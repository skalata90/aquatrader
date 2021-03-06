@extends('templates.main')


@section('content')		
			<h2>Add new product</h2>
			

			{!! Form::open(array('url' => 'products','files'=>true)) !!} {{--  shorthand of array() is [] --}}
				<fielset>
					{!! Form::label('name', 'Product name') !!}
					{!! Form::text('name') !!}
					{!! $errors->first('name','<p class="error">:message</p>') !!}

					{!! Form::label('description', 'Description') !!}
					{!! Form::textarea('description') !!}
					{!! $errors->first('description','<p class="error">:message</p>') !!}

					{!! Form::label('price', 'Price') !!}
					{!! Form::text('price')!!}
					{!! $errors->first('price','<p class="error">:message</p>') !!}

					{!! Form::label('photo', 'Photo') !!}
					{!! Form::file('photo') !!}

					{!! Form::label('type_id', 'Product type') !!}
					{!! Form::select('type_id', \App\Models\Type::lists("name", "id")) !!}

	
					<input type="submit" value="Create Product">
				</fielset>
			{!! Form::close() !!}
@stop
		