@extends('main')

@section('title','| Categories')

@section('content')
	
<div class="row">
	<div class="col-md-6">
	<h2 class="text-center">Category List:</h2>	
	<hr>
	<ul class="list-group">
		@foreach( $categories as $category ) 
		
			<li class="list-group-item">{{$category->name}}</li>
		
		@endforeach
	</ul>
	</div>

	<div class="col-md-6">
		<h2 class="text-center">Add new Category</h2>
		<hr>
		{{Form::open(['route' => 'categories.store'])}}

		{{Form::label('name','Name:')}}
		{{Form::text('name',null,['class' => 'text-center'])}}

		{{Form::submit('Add category',['class' => 'btn btn-primary btn-lg'])}}

		{{Form::close()}}
	</div>

</div>
@endsection