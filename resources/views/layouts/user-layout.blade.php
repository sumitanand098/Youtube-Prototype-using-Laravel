<!DOCTYPE html>
<html>
<head>
	@include('layouts.users.head')
</head>
<body>
	<div class="wrapper bg-grey">
		<!-- HEADER STARTS-->
		<header>
			@include('layouts.users.header')
		</header>
		<!--HAEDER ENDS-->
		
		<div class="top-spacing"></div>
		<!-- BODY STARTS-->
		<div class="main video-stream">
		    <!-- SIDE NAVIGATION BAR STARTS -->
		    <div class="side-menubar">
				@include('layouts.users.sidebar')
		    </div>
		    <!-- SIDE NAVIGATION BAR ENDS -->

		    <!-- MAIN SECTION STARTS -->
		     	<div class="row left-spacing1" >
		     		@yield('content')
        		</div>
		   	<!-- MAIN SECTION ENDS -->
		</div>
		<!-- BODY ENDS-->

		<!-- FOOTER STARTS-->
		<div class="footer">
			@include('layouts.users.footer')
		</div>
		<!--FOOTER ENDS-->
	</div>
	@include('layouts.users.js')
</body>
</html>