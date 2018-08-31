@extends('layouts.admin-layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Admin Edit
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('admin.view') }}"><i class="fa fa-user"></i> Admin</a></li>
    <li class="active"><i class="fa fa-edit"></i>Admin Edit</li>
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
          <h3 class="box-title">Admin Edit Page</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" id="exampleInputFirstName" value="Admin">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" class="form-control" id="exampleInputLastName" value="Codegama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" value="admin@codegama.com">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
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