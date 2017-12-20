<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand {{ Request::is('/') ? "active" : "" }}" href="/">Sorin's Blog</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('/about') ? "active" : "" }}" href="/about">About </a>
        </li>
        <li class="nav-item {!! Request::is('/contact') ? "active" : "" !!}">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ Request::is('/posts') ? "active" : "" }}" href="/posts">Posts</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>