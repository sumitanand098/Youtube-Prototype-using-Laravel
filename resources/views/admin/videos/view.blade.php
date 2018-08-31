@extends('layouts.admin-layout')
@section('content')
<!-- Content Header (Page header) -->
	@foreach($data as $value)
<section class="content-header"><h1>{{ $value->video_name }}</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('videos.index') }}"><i class="fa fa-video-camera"></i> Videos</a></li>
    <li class="active"><i class="fa fa-video-camera"> Videos</i></li>
  </ol>
</section>
<div class="col-md-10 col-md-offset-1">
	<video controls class=" col-md-12 " style="max-height: 500px;">
		<source src="{{ $value->video }}" type="video/mp4">
  		<source src="{{ $value->video }}" type="video/ogg">
		Your browser does not support HTML5 video.
	</video>
	<p><a href="https://www.w3schools.com/htmL/mov_bbb.mp4">{{ $value->video_name }}</a></p>
	<p>Video courtesy of <a href="https://www.bigbuckbunny.org/" target="_blank">{{ $value->description }}</a></p>
</div>
	@endforeach
@endsection
