@extends('layouts.admin-layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header"><h1>Add user<small>Preview</small></h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{ route('users.index') }}"><i class="fa fa-user"> Users</i></a></li>
        <li class="active"><i class="fa fa-user-plus"> Add Users</i></li>
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
              <h3 class="box-title">Create User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('users.create') }}">
              {{ csrf_field() }}
            <!-- <form role="form"> -->
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Picture</label>
                  <input type="file" id="image" name="image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection