@extends('templates.main')


@section('content')	

	<h2>{{$product->type->name}}</h2>

		<article class="group">
			<img src="{{asset('productphotos/'.$product->photo)}}" alt="">
			<h4>{{$product->name}}</h4>
			<p>{{$product->description}}</p>
			<span class="price"><i class="icon-dollar"></i>{{$product->price}}</span>
			<span class="addtocart"><i class="icon-plus"></i></span>
		

			{!! Form::open(["url"=>"cartitems"]) !!} 

			{!! Form::label('quantity', 'Quantity') !!}
			{!! Form::select('quantity', [1=>1, 2=>2, 3=>3, 4=>4]) !!}

			{!! Form::hidden("id", $product->id) !!}

			{!! Form::submit("ADD TO CART") !!}
			
			{!! Form::close() !!}


			{!! Form::open(["url"=>"products/".$product->id, "method"=>"delete"]) !!} 
			{!! Form::submit("Delete") !!}
			{!! Form::close() !!}

		</article>
@stop