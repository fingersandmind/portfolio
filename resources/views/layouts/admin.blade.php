<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from www.spruko.com/demo/viboon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:11:26 GMT -->
@include('partials.admin.head')
	<body class="">
		<div class="page" >
			<div class="page-main">
                @include('partials.admin.header')
                
                @yield('content')
                
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		@include('partials.admin.scripts')

	</body>

<!-- Mirrored from www.spruko.com/demo/viboon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 18:12:27 GMT -->
</html>