@extends('main')

@section('title','| All Posts')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>All posts</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn  btn-primary btn-block" style="margin-top:18px;">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tbody>
							<td>{{ $post->id }}</td>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body,0,200)}}</td>
							<td><a class="btn btn-default" href="{{ route('posts.show',[$post->id]) }}">View</a><a class="btn btn-default" href="{{ route('posts.edit',[$post->id]) }}">Edit</a></td>
						</tbody>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
@endsection