@extends('main')

@section('title','| Edit your post!')

@section('content')
	<div class="row">
		<div class="col-md-8">
			
			{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control']) }}
			
			{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}

			{{ Form::label('slug','Slug:') }}
    		{{ Form::text('slug',null,['class' => 'form-control', 'required' => '','minlength' => '5','maxlength' => '250']) }}

    		{{ Form::label('category','Category: ') }}
    		{{ Form::select('category_id', $categories, $post->category_id,['class' => 'form-control']) }}

			{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block btn-lg']) }}

			{{ Form::close() }}
			
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block btn-lg')) !!}
					</div>
					<div class="col-sm-6">
						

					</div>
				</div>

			</div>
		</div>
	</div>	<!-- end of .row (form) -->

@stop