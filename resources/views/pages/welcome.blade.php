@extends('main')
@section('title','| Homepage')
@section('content')


<!-- Jumbotron -->


    <div class="row">
        <div class="col-md-12">  <!-- full width grid -->

            <div class="jumbotron">
                <h1>Welcome to my Blog!</h1>
                <p class="lead">Thanks for visiting.</p>


                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="blog/first-post" role="button">My first post</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >  <!-- 8/12 griduri -->
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 120) }} {{ strlen($post->body) > 150 ? '...' : '' }} </p>
                    <a href="{{ route('blog.single',$post->slug) }}" class="btn btn-primary">Read More</a>
                </div> 
                <hr>

            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1"> <!-- 3 grid-uri, una pauza -->
            <h2>Sidebar</h2>
            <p>alalalala</p>
        </div>

      </div> 


@endsection



    