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
						<a href="{{ route('user.signup') }}" class="forgot">SignUp<i class="fa fa-chevron-right signin-arrow"></i></a>
					</div>
					<div class="clear-both"></div>
					<h2 class="signup-head center-align top">StreamNow</h2>
					<!-- FORM STARTS -->
					<form class="content role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
						
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="text" id="input-2" name="email" />
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2" data-content="Email">
								<span class="input__label-content input__label-content--hoshi">Email</span>
							</label>
							@if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</span>
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="Password" id="input-3" name="password" />
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3" data-content="Password">
								<span class="input__label-content input__label-content--hoshi">Password</span>
							</label>
							@if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</span>
						<div class="Spacer-5"></div>
						<div class="center-align">
					    	<button class="btn btn-default btn-block btn-lg width-200" type="button">SignIn</button>
					    </div>
					</form>
					<!-- FORM ENDS -->
					<!-- <div class="center-align">
						<a href="{{ url('/password/reset') }}" class="forgot">Forgot Password?</a>
					</div> -->
				</div>
				<div class="Spacer-10"></div>
			</div>
		</div>
		<!-- BODY ENDS-->
	</div>
	@include('layouts.users.js')
</body>
</html>