@extends('layouts.user-layout')
@section('content')
<div id="wrap" class="bg-grey">
  <section class="video-stream">
    <div class="container">
      <div class="row">
        <div class="stn-live-video">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
            <!-- Nav tabs -->
            <div class="card">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Feature</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Following</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
              @foreach($data as $value)
                  <div class="live-video-box">
                    <!-- <video width="100%" controls>
                      <source src="{{ $value->video }}" type="video/mp4">
                      <source src="{{ $value->video }}" type="video/ogg">
                      Your browser does not support HTML5 video.
                    </video> -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <div class="inner-video"> <img src="{{ $value->image }}" style="width: 100%;" alt=""> </div>
                      <a href="users/singlevideo/{{ $value->id }}">
                        <div class="playbtn1">
                            <div class="white-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn.png') }}"></div>
                            <div class="pink-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn-pink.png') }}"></div>
                        </div>
                      </a> </div>                      
                    <div class="content-stm-video">
                      <!-- <div class="video-right-btn">
                        <button class="btn btn-default btn-block btn-br" type="button">Lorem Ipsum Lorem</button>
                        <button class="btn btn-default btn-block btn-br" type="button">Music</button>
                        <button class="btn btn-default btn-block btn-br" type="button">Music</button>
                      </div> -->
                      <div class="video-content">
                        <h1 class="h4-s text-bold">{{ $value->video_name }}</h1>
                        <div class="video-watch-time"> <span class="watched-user">Watching: 5431</span> <span class="strated-time">{{ $value->created_at }}</span> </div>
                        <div class="user-details"> <span class="user-img-sm"><img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"></span> <span class="user-name-info">{{ $value->description }}</span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="clear-both"></div>
                  <div class="Spacer-20"></div>
                  @endforeach
                  <!-- <div class="live-video-box">
                    <div class="embed-responsive embed-responsive-16by9">
                      <div class="inner-video"> <img src="{{ URL::asset('assets/users/img/bg-video-default.jpg') }}" alt=""> </div>
                      <a href="#">
                        <div class="playbtn1">
                            <div class="white-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn.png') }}"></div>
                            <div class="pink-btn-play1"><img src="{{ URL::asset('assets/users/img/play-btn-pink.png') }}"></div>
                        </div>
                      </a> </div>
                    <div class="content-stm-video">
                      <div class="video-right-btn">
                        <button class="btn btn-default btn-block btn-br" type="button">Lorem Ipsum Lorem</button>
                        <button class="btn btn-default btn-block btn-br" type="button">Music</button>
                        <button class="btn btn-default btn-block btn-br" type="button">Music</button>
                      </div>
                      <div class="video-content">
                        <h1 class="h4-s text-bold">Eminem Live from Australia</h1>
                        <div class="video-watch-time"> <span class="watched-user">Watching: 5431</span> <span class="strated-time">Started: 4:35 PM</span> </div>
                        <div class="user-details"> <span class="user-img-sm"><img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"></span> <span class="user-name-info">Katherine Langford</span> </div>
                      </div>
                    </div>
                  </div> -->
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                <div role="tabpanel" class="tab-pane" id="messages">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div role="tabpanel" class="tab-pane" id="settings">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="user-profile text-center">
              <div class="profile-user-img"> <img class="img-circle img-responsive" src="{{Auth::user()->image}}" style="width: 200px !important; height: 200px !important;"> </div>
              <h4 class="h4-s user-name text-bold">{{ Auth::user()->name }}</h4>
              <span class="user-dt">
              <div class="stnw-divStats">
                <ul class="stnw-Arrange">
                  <li class="stnw-ArrangeSizeFit"> <a href="#" title="9.840 Streams"> <span class="stnw-StatValue">17</span> <span class="stnw-StatLabel stnw-block">Streams</span> </a> </li>
                  <li class="stnw-ArrangeSizeFit"> <a href="#" title="885 Following"> <span class="stnw-StatValue">12</span> <span class="stnw-StatLabel stnw-block">Wishlist</span> </a> </li>
                </ul>
              </div>
              </span>
              <button class="btn btn-default btn-block btn-lg" type="button">GO LIVE</button>
              <hr>
              <div class="follow-users-list">
                <h5 class="h5-s following-user text-uppercase">Following Users</h5>
                <h6 class="h6-s stn-stream-heading text-uppercase"> Streaming </h6>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user">
                  <button class="btn btn-default btn-block btn-br" type="button">Watch</button>
                  </span> </div>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user">
                  <button class="btn btn-default btn-block btn-br" type="button">Watch</button>
                  </span> </div>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user">
                  <button class="btn btn-default btn-block btn-br hdbfksj" type="button">Watch</button>
                  </span> </div>
              </div>
              <div class="follow-users-list recent-streams">
                <h6 class="h6-s stn-stream-grey text-uppercase">Recent Streams </h6>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user recent-btn">
                  <button class="btn btn-default btn-block btn-br" type="button">Watch</button>
                  </span> </div>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user recent-btn">
                  <button class="btn btn-default btn-block btn-br" type="button">Watch</button>
                  </span> </div>
                <div class="user-details watch-user"> <span class="user-img-sm"> <img class="img-circle img-responsive user-details-img" src="{{ URL::asset('assets/users/img/user.jpg') }}" alt="John Doe" width="40" height="40"> </span> <span class="user-name-info">Katherine Langford</span> <span class="watch-btn-user recent-btn">
                  <button class="btn btn-default btn-block btn-br" type="button">Watch</button>
                  </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection