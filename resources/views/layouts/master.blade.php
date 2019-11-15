<!DOCTYPE HTML>
<html>
	@include('partials.head')
	<body>
	<div id="colorlib-page">
		<div class="container-wrap">

        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        
		@include('partials.sidebar')

		<div id="colorlib-main">
            
			@yield('content')

		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->

	@include('partials.scripts')

	</body>
</html>

