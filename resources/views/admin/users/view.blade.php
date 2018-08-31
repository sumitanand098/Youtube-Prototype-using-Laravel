@extends('layouts.admin-layout')
@section('content')
 
<section class="content-header">
    <h1>View User</h1>
    <ol class="breadcrumb"><li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> Users</a></li>
	    <li class="active"><i class="fa fa-user"></i> View User</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              @foreach($data as $value)
              <img class="profile-user-img img-responsive img-circle" src="{{$value->image}}" alt="User profile picture" style="width: 100px !important; height: 100px !important;">

              <h3 class="profile-username text-center">{{ $value->name }}</h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
	              	<h5 class="profile-username"><small>Email Address :</small></h5>
	              	<h3 class="profile-username">{{ $value->email }}</h3>
                </li>
              </ul>
              <ul class="admin-action btn btn-default pull-right">
                  <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Action <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.edit') }}/{{ $value->id }}">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.delete', $value->id) }}">Delete</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Approve</a></li>
                    </ul>
                  </div>
                </ul>
              @endforeach
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
    </div>

</section>

@endsection