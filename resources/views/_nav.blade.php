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
    

    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</div>
</nav>