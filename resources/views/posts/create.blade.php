@extends('main')

@section('stylesheets')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('title','| Create')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Create a Post</h3>
			<hr>

			{!! Form::open(['route' => 'posts.store']) !!}
    			{{ Form::label('title','Title:') }}
    			{{ Form::text('title',null,['class' => 'form-control','required' => '','maxlength' => '255']) }}

    			{{ Form::label('body','Content:') }}
    			{{ Form::textarea('body',null,['class' => 'form-control','required' => '']) }}

    			{{ Form::label('slug','Slug:') }}
    			{{ Form::text('slug',null,['class' => 'form-control', 'required' => '','minlength' => '5','maxlength' => '250']) }}

    			{{ Form::label('category_id','Category:')}}
    			<select class="form-control" name="category_id">
    				@foreach($categories as $category)
    					<option value="{{ $category->id }}" class="form-control">{{$category->name}}</option>
    				@endforeach	
    				
    			</select>
    			
    			{{ Form::submit('Submit Post!',['class' => 'btn-success btn-lg btn-block','style' => 'margin-top:20px']) }}
			{!! Form::close() !!}
		</div>
	</div>
</div>	

@endsection	

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
@endsection	