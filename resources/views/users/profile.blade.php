@extends('layouts.user-layout')
@section('content')
<div class="wrapper bg-grey">
	<!-- BODY STARTS-->
	<div class="main">

	    <!-- PROFILE SECTION STARTS -->
		<div class="profile-bg-image" style="background-image: url({{ URL::asset('assets/users/img/pro-bg.jpg') }});">
			<div class="container">
					<div class="Spacer-25 hidden-xs"></div>
					<div class="Spacer-18 visible-xs"></div>
					<div class=" row">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center-align">
							<div style="background-image: url({{Auth::user()->image}});" style="width: 200px !important; height: 200px !important;" class="user-profile1"></div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 white-text">
							<div class="Spacer-10"></div>
							<h1 class="signup-head">{{Auth::user()->name}}</h1>
							<div class="Spacer-5"></div>
							<h3 class="signup-head">{{Auth::user()->email}}</h3>
							<div class="Spacer-5"></div>
							<h4 class="signup-head">
								<a href="#" class="pro-head">
									Wishlist - 12
								</a>
							</h4>
							<hr>
						</div>
					</div>
				</div>
				<div class="Spacer-10"></div>
			<!-- NAVIGATION TABS STARTS -->
			<div class="overlay1 container">
				<ul class="nav nav-tabs profile-tab" role="tablist">
					<li role="presentation" class="active">
					    <a href="#about" aria-controls="home" role="tab" data-toggle="tab" class="white-text hidden-xs">About</a>
					    <a href="#about" aria-controls="home" role="tab" data-toggle="tab" class="white-text visible-xs"><i class="fa fa-info"></i></a>
					</li>
					<li role="presentation" class="right-align">
					    <a href="#" aria-controls="messages" role="tab" data-toggle="tab" class="white-text hidden-xs">Delete Account</a>
					    <a href="#delete" aria-controls="messages" role="tab" data-toggle="tab" class="white-text visible-xs" ><i class="fa fa-trash"></i></a>
					</li>
					<li role="presentation" class="right-align">
					    <a href="#change" aria-controls="settings" role="tab" data-toggle="tab" class="white-text hidden-xs">Change Password</a>
					    <a href="#change" aria-controls="settings" role="tab" data-toggle="tab" class="white-text visible-xs" ><i class="fa fa-key"></i></a>
					</li>
					<li role="presentation" class="right-align">
					    <a href="#update" aria-controls="settings" role="tab" data-toggle="tab" class="white-text hidden-xs">Update Profile</a>
					    <a href="#update" aria-controls="settings" role="tab" data-toggle="tab" class="white-text visible-xs" ><i class="fa fa-pencil-square-o"></i></a>
					</li>
				</ul>
			</div>
			<!-- NAVIGATION TABS ENDS -->
		</div>
		<!-- PROFILE SECTION ENDS -->

		<!-- TAB CONTENT STARTS -->
		<div class="tab-content">
			<!-- ABOUT CONTENT STARTS -->
		    <div id="about" class=" tab-pane fade in active zero-padding">
		    	<div class="container top-bottom-spacing padd">
			      	<div class="row">
			      		<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
			      			<h2 class="tab-head">About me</h2>
			      			<h4>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
			      		</div>
			      		<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
			      			<div class="spacing1 blue-bg">
				      			<h4 class="tab-head">Subscription Video</h4>
				      			<h5 class="tab-head">2017-07-24 23:07:03</h5>
				      			<h4 class="tab-head grey-clr">$0.00/ -35 days.</h4>
				      			<a href="subscription.html">
				      				<button class="btn2" type="button width-200">SUBSCRIPTION PLAN</button>
				      			</a>
				      			<div class="Spacer-5"></div>
				      			<p class="line"></p>
				      			<h4 class="tab-head">Payment Info</h4>
				      			<h4 class="tab-head grey-clr">$9.10/ 15 videos.</h4>
				      			<h5 class="tab-head">Received : $9.00</h5>
				      			<h5 class="tab-head">Pending : $0.10</h5>
				      			<p class="line"></p>
				      			<h4 class="tab-head">Videos Info</h4>
				      			<h4 class="tab-head grey-clr">Total Count : 244 videos.</h4>
				      		</div>
			      		</div>
			      	</div>
		      	</div>
		    </div>
		    <!-- ABOUT SECTION ENDS -->
		    <!-- DELETE ACCOUNT SECTION STARTS -->
		    <div id="delete" class=" tab-pane fade zero-padding">
		    	<div class="container top-bottom-spacing">
			    	<div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 spacing2">
				    	<h3 class="tab-head">Hope, see you soon</h3>
				    	<h5 class="tab-head">Note: Once you deleted account, you will lose your history and video details.</h5>
						<form class="content">
							<span class="input input--hoshi">
								<input class="input__field input__field--hoshi" type="text" id="pass" />
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="pass" data-content="Password">
									<span class="input__label-content input__label-content--hoshi">Password</span>
								</label>
							</span>
							<div class="Spacer-8"></div>
							<div class="center-align">
								<button class="btn width-120" type="button" >SAVE</button>
								<div class="Spacer-3 visible-xs"></div>
								<button class="btn1 width-120" type="button" >CANCEL</button>
							</div>
						</form>
			    	</div>
		    	</div>
		    </div>
		    <!-- DELETE ACCOUNT SECTION ENDS -->
		    <!-- CHANGE PASSWORD SECTION STARTS -->
		    <div id="change" class="container-fluid tab-pane fade zero-padding">
		    	<div class="container top-bottom-spacing">
			      	<h2 class="signup-head center-align ">CHANGE PASSWORD</h2>
			      	<div class="col-xs-12  col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 spacing2">
			      		<form class="content">
			      			<span class="input input--hoshi">
								<input class="input__field input__field--hoshi" type="Password" id="crnt-pass" />
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="crnt-pass" data-content="Current Password">
									<span class="input__label-content input__label-content--hoshi">Current Password</span>
								</label>
							</span>
							<span class="input input--hoshi">
								<input class="input__field input__field--hoshi" type="Password" id="new-pass" />
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="new-pass" data-content="New Password">
									<span class="input__label-content input__label-content--hoshi">New Password</span>
								</label>
							</span>
							<span class="input input--hoshi">
								<input class="input__field input__field--hoshi" type="Password" id="con-pass" />
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="con-pass" data-content="Confirm Password">
									<span class="input__label-content input__label-content--hoshi">Confirm Password</span>
								</label>
							</span>
							<div class="Spacer-8"></div>
							<div class="center-align">
								<button class="btn width-120" type="button" >SAVE</button>
								<div class="Spacer-3 visible-xs"></div>
								<button class="btn1 width-120" type="button" >CANCEL</button>
							</div>
						</form>
			      	</div>
		      	</div>
		    </div>
		    <!-- CHNAGE PASSWORD SECTION ENDS -->
		    <!-- UPDATE PROFILE SECTION STARTS -->
		    <div id="update" class="container-fluid tab-pane fade zero-padding">
		    	<div class="container top-bottom-spacing">
			        <div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 center-align">
							<div style="background-image: url({{Auth::user()->image}});" class="user-profile1"></div>
							<form>
								<div>
									<label  class="tab-label center-align">Upload a different photo</label>
									<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-2 none" data-multiple-caption="{count} files selected" multiple />
									<label for="file-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
											<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
										</svg>
										<span>Choose a file&hellip;</span>
									</label>
								</div>
								<div>
									<label class="tab-label">Change Cover Image</label>
									<input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2 none" data-multiple-caption="{count} files selected" multiple />
									<label for="file-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
											<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
										</svg> 
										<span>Choose a file&hellip;</span>
									</label>
								</div>
							</form>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-6 col-lg-offset-1 col-lg-6 spacing2">
							<form class="content">
								<span class="input input--hoshi">
									<input class="input__field input__field--hoshi" type="text" id="name" />
									<label  class="input__label input__label--hoshi input__label--hoshi-color-1" for="name" data-content="Name">
										<span class="input__label-content input__label-content--hoshi">Name</span>
									</label>
								</span>
								<span class="input input--hoshi">
									<input class="input__field input__field--hoshi" type="text" id="email" />
									<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="email" data-content="Email">
										<span class="input__label-content input__label-content--hoshi">Email</span>
									</label>
								</span>
								<span class="input input--hoshi">
									<textarea class="input__field input__field--hoshi" type="text" id="about"></textarea>
									<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="about" data-content="About">
										<span class="input__label-content input__label-content--hoshi">About</span>
									</label>
								</span>
									<div class="Spacer-5"></div>
									<div class="center-align">
										<button class="btn width-120" type="button" >SAVE</button>
										<div class="Spacer-3 visible-xs"></div>
										<button class="btn1 width-120" type="button" >CANCEL</button>
									</div>
								</span>
							</form>
						</div>
					</div>
				</div>
		    </div>
		    <!-- UPDATE PROFILE SECTION ENDS -->
		</div>
		<!-- TAB CONTENT ENDS -->
	</div>
	<!-- BODY ENDS -->
</div>
<!-- FORM ANIMATION FILES -->

@endsection