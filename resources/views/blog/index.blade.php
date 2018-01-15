@extends('main')

@section('title','| Blog')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h2>
			
		</div>
		
		@foreach($posts as $post)
		
		<div class="col-md-8">
			<h2>{{ $post->title }}</h2>
			<h5>Created at: {{ date('D j,Y', strtotime($post->created_at)) }}</h5>
			<p> {{ substr($post->body,0,100) }} {{ strlen($post->body) > 100 ? '...' : '' }} </p>
			<a href=" {{ route('blog.single', $post->slug) }} " class="btn btn-primary">Read More</a>
			<hr>
		
		</div>
		
		@endforeach

		<div class="col-md-12">
			<div class="text-center">
				{{ $posts->links() }}
			</div>
		</div>
	</div>

@endsection
