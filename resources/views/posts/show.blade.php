@extends('main')

@section('title','| Show post')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h2> {{ $post->title }} </h2>
			<hr>
			<p> {{ $post->body }} </p>
			<hr>
			
		</div>
		<div class="col-md-4">
			<dl class="row" style="background-color: #e6e6e6; word-wrap: break-word;">
			  <dt class="col-sm-6">Url:</dt>
			  <dd class="col-sm-6">
			  	<a href="{!! url('blog/'.$post->slug) !!}">{!! url('blog/'.$post->slug) !!}</a>
			  </dd>
			  <hr>
			  <dt class="col-sm-6">Category:</dt>
			  <dd class="col-sm-6">
			  	<p>{{ $post->category['name'] }}</p>
			  </dd>
			  <hr>
			  <dt class="col-sm-6">Created at:</dt>
			  <dd class="col-sm-6">
			  	{!! date('M jS Y, h:iA',strtotime($post->created_at)) !!}
			  </dd>
			  <hr>
			  <dt class="col-sm-6">Updated at</dt>
			  <dd class="col-sm-6">{!! date('M jS Y, h:iA',strtotime($post->updated_at)) !!}</dd>
			  <dt class="col-sm-6">
			  	{{ Html::linkRoute('posts.edit','Edit',[$post->id],['class' => 'btn btn-primary btn-block']) }}
			  	
			  </dt>
			  <dd class="col-sm-6">
			  	

			  	{{ Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'DELETE']) }}

			  	{{ Form::submit('Delete' ,['class' => 'btn btn-danger btn-block']) }}

			  	{{ Form::close() }}
			  	
			  </dd> 
			 </dl> 
		</div>
	</div>
@endsection