@extends('layouts.admin-layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Edit
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> Users</a></li>
        <li class="active"><i class="fa fa-edit"></i>User Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-md-offset-3">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ url('/admin/users/edit') }}">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{$data->id}}">
              
              <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
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