@extends('layouts.admin-layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header"><h1>Edit Video<small>Preview</small></h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{ route('videos.index') }}"><i class="fa fa-video-camera"> Videos</i></a></li>
        <li class="active"><i class="fa fa-video-camera"> Edit Video</i></li>
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
              <h3 class="box-title">Edit Video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('admin/videos/edit') }}">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$data->id}}">
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
                  <label for="exampleInputFile">Picture</label>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Video</label>
                  <input type="file" id="video" name="video">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection