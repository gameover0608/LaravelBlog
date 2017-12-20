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
                    <a class="btn btn-primary btn-lg" href="posts/14" role="button">My first post</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >  <!-- 8/12 griduri -->
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem iopsum ahahahaa...</p>
                <a href="#" class="btn btn-primary">read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem iopsum ahahahaa...</p>
                <a href="#" class="btn btn-primary">read More</a>
            </div> 
            <hr>
            <div class="post">
                @foreach($posts as $post)
                  <h3> {{ $post->title }} </h3>
                  <p> {{ $post->body }} </p>
                @endforeach
            </div>     

        </div>

        <div class="col-md-3 col-md-offset-1"> <!-- 3 grid-uri, una pauza -->
            <h2>Sidebar</h2>
            <p>alalalala</p>
        </div>

      </div> 


@endsection



    