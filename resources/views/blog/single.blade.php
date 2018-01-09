@extends('main')

@section('title','| Show post')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2> {{ $post->title }} </h2>
			<hr>
			<p> {{ $post->body }} </p>
		</div>
		
	</div>
@endsection