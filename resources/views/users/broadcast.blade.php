@extends('layouts.user-layout')
@section('content')
<div class="wrapper bg-grey">

	<!-- BODY STARTS-->
	<div class="main">
	    <!--MAIN SECTION STARTS-->
		<div class="sec-padding left-spacing1">
			<div class="row">
				<!-- BRAODCAST IMAGE SECTION STARTS -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 top-margin">
					<div class="relative">
						<img src="{{ URL::asset('assets/users/img/stream.jpg') }}" class="img-responsive broadcast-img" >
						<div class="broadcast-btn">
							<button class="btn" type="button" data-toggle="modal" data-target="#myModal">START BROADCASTING</button>
						</div>
					</div>
				</div>
				<!-- BROADCAST IMAGE SECTION ENDS -->

				<!-- CHAT SECTION STARTS -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 top-margin">
					<div class="panel panel-default ">
					    <div class="panel-heading white-text"><i class="fa fa-commenting icon"></i>Chat</div>
					    <div class="panel-body">
					    	<!-- LEFT ALIGNED MEDIA OBJECT-->
						 	<div class="media">
							    <div class="media-left width-60">
							      	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object media1" >
							    </div>
							    <div class="media-body">
							      	<h4 class="media-heading">Name</h4>
							      	<p>Message...</p>
							    </div>
						  	</div>
						  	<hr>
						  	<!-- LEFT ALIGNED MEDIA OBJECT-->
						 	<div class="media">
							    <div class="media-left width-60">
							      	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object media1">
							    </div>
							    <div class="media-body">
							      	<h4 class="media-heading">Name</h4>
							      	<p>Message...</p>
							    </div>
						  	</div>
						  	<hr>
						  	<!-- Left-aligned media object -->
						 	<div class="media">
							    <div class="media-left width-60">
							      	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object media1" >
							    </div>
							    <div class="media-body">
							      	<h4 class="media-heading">Name</h4>
							      	<p>Message...</p>
							    </div>
						  	</div>
						  	<hr>
					    </div>
					    <div class="panel-footer">
					    	<form>
							    <div class="input-group">
							      	<input  type="text" class="form-control broad-form" placeholder="Type your message here...">
							      	<span class="input-group-addon broad-icon"><i class="fa fa-paper-plane"></i></span>   
							    </div>
							</form>
					    </div>
					</div>
				</div>
				<!-- CHAT SECTION ENDS -->
			</div>
		</div>
		<!--MAIN SECTION ENDS-->

		<!-- PUBLIC VIDEO SECTION STARTS-->
		<div class="sec-padding left-spacing1">
			<div class="public-video-header">
				PUBLIC VIDEOS
			</div>
			<div class="row">
				<!-- PUBLIC VIDEOS LIST STARTS -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 top-margin">
							<div class="live-video-box">
								<div class="public-img" style="background-image: url({{ URL::asset('assets/users/img/image2.jpg') }});">
									<a href="#">
						                <div class="playbtn1">
						                    <div class="white-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn.png') }}"></div>
						                    <div class="pink-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn-pink.png') }}"></div>
						                </div>
						           	</a>
						           	<a href="#">
						           		<div class="followers-count">
						           			<i class="fa fa-eye icon"></i><span>2</span>
						           		</div>
						           	</a>
								</div>
								<div class="user-profile spacing">
									<h4 class="h4-s user-name text-bold overflow">John Doe</h4>
									<h5 class="h5-s user-name overflow">Description</h5> 
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 top-margin">
							<div class="live-video-box">
								<div class="public-img" style="background-image: url({{ URL::asset('assets/users/img/image3.jpg') }});">
									<a href="#">
						                <div class="playbtn1">
						                    <div class="white-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn.png') }}"></div>
						                    <div class="pink-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn-pink.png') }}"></div>
						                </div>
						           	</a>
						           	<a href="#">
						           		<div class="followers-count">
						           			<i class="fa fa-eye icon"></i><span>2</span>
						           		</div>
						           	</a>
								</div>
								<div class="user-profile spacing">
									<h4 class="h4-s user-name text-bold overflow">John Doe</h4>
									<h5 class="h5-s user-name overflow">Description</h5> 
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 top-margin">
							<div class="live-video-box">
								<div class="public-img" style="background-image: url({{ URL::asset('assets/users/img/image4.jpg') }});">
									<a href="#">
						                <div class="playbtn1">
						                    <div class="white-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn.png') }}"></div>
						                    <div class="pink-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn-pink.png') }}"></div>
						                </div>
						           	</a>
						           	<a href="#">
						           		<div class="followers-count">
						           			<i class="fa fa-eye icon"></i><span>2</span>
						           		</div>
						           	</a>
								</div>
								<div class="user-profile spacing">
									<h4 class="h4-s user-name text-bold overflow">John Doe</h4>
									<h5 class="h5-s user-name overflow">Description</h5> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- PUBLIC VIDEOS LIST ENDS -->

				<!-- SUGGESTION LIST STARTS -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="suggestion-list">
						<div class="media">
							<button type="button" class="close close1" data-dismiss="modal">&times;</button>
						  	<div class="media-left">
						    	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object img-thumbnail width-70">
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">John Doe</h4>
						    	<p>0 Followers</p>
						    	<button class="btn2 btn-padding" type="button"><i class="fa fa-thumbs-up icon" ></i>Follow</button>
						  	</div>
						  	<hr>	
						</div>
						<div class="media">
							<button type="button" class="close close1" data-dismiss="modal">&times;</button>
						  	<div class="media-left">
						    	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object img-thumbnail width-70">
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">John Doe</h4>
						    	<p>0 Followers</p>
						    	<button class="btn2 btn-padding" type="button"><i class="fa fa-thumbs-up icon" ></i>Follow</button>
						  	</div>	
						  	<hr>	
						</div>
						<div class="media">
							<button type="button" class="close close1" data-dismiss="modal">&times;</button>
						  	<div class="media-left">
						    	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object img-thumbnail width-70">
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">John Doe</h4>
						    	<p>0 Followers</p>
						    	<button class="btn2 btn-padding" type="button"><i class="fa fa-thumbs-up icon" ></i>Follow</button>
						  	</div>
						  	<hr>
						</div>
						<div class="media">
							<button type="button" class="close close1" data-dismiss="modal">&times;</button>
						  	<div class="media-left">
						    	<img src="{{ URL::asset('assets/users/img/user.jpg') }}" class="media-object img-thumbnail width-70">
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">John Doe</h4>
						    	<p>0 Followers</p>
						    	<button class="btn2 btn-padding" type="button"><i class="fa fa-thumbs-up icon" ></i>Follow</button>
						  	</div>
						</div>
					</div>
				</div>
				<!-- SUGGESTION LIST ENDS -->
			</div>
		</div>
		<!--PUBLIC VIDEO SECTION ENDS-->

		<!-- BROADCAST FORM STARTS -->
		<div class="modal fade white-text top1" id="myModal" role="dialog" >
		    <div class="modal-dialog">
		      	<!-- MODAL CONTENT STARTS-->
		      	<div class="modal-content">
			        <div class="modal-header">
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			          	<h3 class="modal-title">Streaming form</h3>
			        </div>
			        <div class="modal-body profile-bg-image" style="background-image: url({{ URL::asset('assets/users/img/pro-bg1.jpg') }})">   
			        	<div class="light-blue-bg modal-body1">
						<form>
							<div class="input input--hoshi content1">
								<input class="input__field input__field--hoshi" type="text" id="title" />
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="Title" data-content="Title">
									<span class="input__label-content input__label-content--hoshi">Title</span>
								</label>
							</div>
							<div class="Spacer-5"></div>
							<div class="form-group">
						      	<label class="control-label col-sm-3 zero-padding" for="optradio">Payment:</label>
						      	<div class="col-sm-8">
						        	<label class="radio-inline width-100">
								      	<input type="radio" id="optradio" checked="checked" class="option-input radio" name="radio1">Free
								    </label>
								    <label class="radio-inline">
								      	<input type="radio" id="optradio" class="option-input radio" name="radio1" >Paid
								    </label>
						      	</div>
						    </div>
						    <div class="Spacer-6"></div>
						    <div class="clear-both"></div>
							<div class="form-group">
						      	<label class="control-label col-sm-3 zero-padding" for="optradio1">Mode:</label>
						      	<div class="col-sm-8">
						        	<label class="radio-inline width-100">
								      	<input type="radio" id="optradio1" class="option-input radio" name="radio" checked>Public
								    </label>
								    <label class="radio-inline">
								      	<input type="radio" id="optradio1" class="option-input radio" name="radio">Private
								    </label>
						      	</div>
						    </div>
							<div class="input input--hoshi content1">
								<textarea class="input__field input__field--hoshi" type="text" id="desc"></textarea>
								<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="desc" data-content="Description">
								<span class="input__label-content input__label-content--hoshi">Description<span>
								</label>
							</div>
							<div class="Spacer-3"></div>
							<div class="text-center">        
							    <button class="btn2 width-120" type="button">SAVE</button>
								<div class="Spacer-3 visible-xs"></div>
							    <button class="btn3 width-120" type="button">CANCEL</button>
							</div>
						</form>
						</div>
			        </div>
		      	</div>
		      	<!-- MODAL CONTENT ENDS -->
		    </div>
		</div>
		<!-- BROAD CAST FORM ENDS -->
	</div>
	<div class="Spacer-5"></div>
	<!-- BOTTOM HEIGHT STARTS-->
	<div class="bottomheight"></div>
	<!-- BOTTOM HEIGHT ENDS-->
</div>
@endsection