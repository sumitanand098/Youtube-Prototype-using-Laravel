@extends('layouts.admin-layout')
@section('content')
 
<section class="content-header">
    <h1>Admin</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li class="active"><i class="fa fa-user"></i> Admin</li>
  	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{Auth::user()->image}}" alt="User profile picture"  style="width: 100px !important; height: 100px !important;">

              <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
	              	<h5 class="profile-username"><small>Email Address :</small></h5>
	              	<h3 class="profile-username">{{Auth::user()->email}}</h3>
                </li>
              </ul>
              <a href="{{ route('users.edit') }}/1" class="btn   btn-primary btn-block pull-right"><b>Edit</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
    </div>

</section>

@endsection