

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand {{ Request::is('/') ? "active" : "" }}" href="/">Sorin's Blog</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('/posts') ? "active" : "" }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('/about') ? "active" : "" }}" href="/about">About </a>
          </li>
          <li class="nav-item {!! Request::is('/contact') ? "active" : "" !!}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
    </ul>
          @if(Auth::check())
    
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My account ( {{ Auth::user()->name }} )
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('posts.index')}}">Posts</a>
              <a class="dropdown-item" href=" {{route('categories.index')}} ">Categories</a>
              <!--<a class="dropdown-item" href="{{url('/logout')}}">Logout</a> -->
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
              </a>    
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
          @else           
  
          <div class="btn btn-light btn-lg">
            <a href=" {{ url('login') }} ">Login</a>
          </div>
          <div class="btn btn-light btn-lg">
            <a href=" {{ url('register') }} ">Register</a>
          </div>

          @endif
</div>
</div>
</nav>