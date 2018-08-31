<!DOCTYPE html>
<html>
<head>
	@include('layouts.users.head')
</head>
<body>
	<div class="wrapper bg-grey">
		@include('layouts.users.header')
		
		<div class="top-spacing"></div>
		<!-- BODY STARTS-->
		<div class="main body-img" style="background-image: url({{ URL::asset('assets/users/img/bg-video-default.jpg') }});">
			<div class="overlay section-spacing">
				<div class="signup-form">
					<div class="right-align">
						<a href="{{ route('user.signin') }}" class="forgot">SignIn<i class="fa fa-chevron-right signin-arrow"></i></a>
					</div>
					<div class="clear-both"></div>
					<h2 class="signup-head center-align top">StreamNow</h2>
					<!-- <div class="Spacer-8"></div> -->
					<!-- FORM STARTS -->
					<form class="content" role="form" method="POST" action="{{ route('user.signup') }}">
              			{{ csrf_field() }}

						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="text" id="input-1" name="first_name">
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1" data-content="First_Name">
							<span class="input__label-content input__label-content--hoshi">First Name</span>
							</label>
						</span>
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="text" id="input-2" name="last_name">
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2" data-content="Last_Name">
							<span class="input__label-content input__label-content--hoshi">Last Name</span>
							</label>
						</span>
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="email" id="input-3" name="email" value="email">
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3" data-content="Email">
							<span class="input__label-content input__label-content--hoshi">Email</span>
							</label>
						</span>
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="password" id="input-4" name="password">
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4" data-content="Password">
							<span class="input__label-content input__label-content--hoshi">Password</span>
							</label>
						</span>
						<div class="form-group">
		                  <label for="exampleInputFile">File input</label>
		                  <input type="file" id="image" name="image">
		                </div>
						<div class="Spacer-5"></div>
						<div class="center-align">
					    	<button class="btn btn-default btn-block btn-lg width-200" type="submit">SignUp</button>
					    </div>
					</form>
					<!-- FORM ENDS -->
				</div>
			</div>
		</div>
		<!-- BODY ENDS -->
	</div>
	@include('layouts.users.js')
</body>
</html>