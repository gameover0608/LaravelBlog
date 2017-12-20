@include('_head')

@include('_bootstrap')

@yield('stylesheets')

<body>

@include('_nav')    

<div class="container">   <!-- container header -->
	@include("_messages")
    @yield('content')

    @include("_footer")
</div>


@include('_js')

@yield('scripts')
</body>
</html>
