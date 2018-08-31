
<ul class="side-menubar1">
	<li class="side-men">
		<a href="{{ route('user.home') }}" ><i id="home" class="fa fa-home sidemenu-icon"></i></a>
	</li>
	<ul class="sidenav">
		<li>Home</li>
	</ul>
		<li class="side-men">
		<a href="{{ route('user.profile') }}"><i id="profile" class="fa fa-user sidemenu-icon" ></i></a>
	</li>
	<ul class="sidenav1">
 		<li>Profile</li>
 	</ul>
 	<li class="side-men">
  		<a href="{{ route('user.broadcast') }}"><i id="broadcast" class="fa fa-globe sidemenu-icon" ></i></a>
    </li>
  	<ul class="sidenav2">
 		<li>Broadcast Yourself</li>
 	</ul>

	<li class="side-men">
		@if (Auth::guest())
	      <li><a href="{{ url('/login') }}">Login</a></li>
	  @else
		<a href="{{ url('/logout') }}"><i id="logout" class="fa fa-sign-in sidemenu-icon" ></i></a>
	  @endif
	</li>
	<ul class="sidenav3">
 		<li>Logout</li>
 	</ul>
</ul>
