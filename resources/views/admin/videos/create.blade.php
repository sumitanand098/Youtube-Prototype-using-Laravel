@extends('layouts.admin-layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header"><h1>Add Video<small>Preview</small></h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{ route('videos.index') }}"><i class="fa fa-video-camera"> Videos</i></a></li>
        <li class="active"><i class="fa fa-video-camera"> Add Video</i></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content col-md-12">
      <div class="row">
        <!-- left column  class="col-md-12"-->
        <div class="col-md-6 col-md-offset-3">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('videos.create') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Video Name</label>
                  <input type="text" class="form-control" id="video_name" name="video_name" placeholder="Video Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="Video is all about:..."></textarea>
                </div>
                <div class="form-group">
                  <div class="{{ $errors->has('image') ? ' has-error' : '' }}">
                    <form enctype="multipart/form-data">
                      <label for="exampleInputFile">Images</label>
                      <input type="hidden" name="size" value="1000000">
                      <input type="file" id="image" name="image">
                    </form>
                  </div>
                </div>
                <div class="form-group">
                  <div class="{{ $errors->has('video') ? ' has-error' : '' }}">
                      <label for="exampleInputFile">Videos</label>
                      <input type="file" id="video" name="video">
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-edit"></i> submit
                  </button>
                </div>
              </div>
              <!-- /.box-body -->
              
            </form>
          </div>
          <!-- /.box -->

          
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection