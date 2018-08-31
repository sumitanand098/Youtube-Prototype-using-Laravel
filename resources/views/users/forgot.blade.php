<!DOCTYPE html>
<html>
<head>
	@include('layouts.users.head')
</head>
<body>
	<div class="wrapper bg-grey">
		@include('layouts.users.header')

		<div class="top-spacing"></div>
		<!--BODT STARTS-->
		<div class="main body-img" style="background-image: url(img/bg-video-default.jpg);">
			<div class="overlay section-spacing1">
				<div class="signup-form">
					<div class="right-align">
						<a href="signin.html" class="forgot">SignIn<i class="fa fa-chevron-right signin-arrow"></i></a>
					</div>
					<div class="clear-both"></div>
					<h2 class="signup-head center-align top">Forgot Password</h2>
					<!-- FORM STARTS -->
					<form class="content">
						<span class="input input--hoshi">
							<input class="input__field input__field--hoshi" type="text" id="input-2" />
							<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2" data-content="Email">
								<span class="input__label-content input__label-content--hoshi">Email</span>
							</label>
						</span>
						<div class="Spacer-5"></div>
					    <div class="center-align">
					    	<button class="btn btn-default btn-block btn-lg width-200" type="button">Submit</button>
					    </div>
					</form>
					<!-- FORM ENDS -->
				</div>
			</div>
		</div>
		<!--BODY ENDS-->
	</div>
	@include('layouts.users.js')
</body>
</html>