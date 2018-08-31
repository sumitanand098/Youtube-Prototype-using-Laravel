@extends('layouts.admin-layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header"><h1>Website Description</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class="fa fa-globe"> Website</i></li>
  </ol>
</section>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Website Desciption</h3>
				</div>
				@foreach($data as $value)
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ Auth::user()->image }}" style="width: 100px !important; height: 100px !important;" class="img-circle img-responsive"> </div>
						<div class=" col-md-9 col-lg-9 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td>Website Name:</td>
										<td>{{ $value->web_name }}</td>
									</tr>
									<tr>
										<td>Formed:</td>
										<td>{{ $value->formed }}</td>
									</tr>
									<tr>
										<td>Date of Update</td>
										<td>{{ $value->updated_at }}</td>
									</tr>

									<tr>
										<tr>
											<td>Developed by:</td>
											<td>{{ $value->dev_by }}</td>
										</tr>
										<tr>
											<td>Company Location:</td>
											<td>{{ $value->location }}</td>
										</tr>
										<tr>
											<td>Email</td>
											<td><a href="{{ $value->email }}">{{ $value->email }}</a></td>
										</tr>
										<td>Phone Number</td>
										<td>+91 {{ $value->mob }}<br><br>555-4567-890(Mobile)</td>
									</tr>

								</tbody>
							</table>

						<div class="col-md-4"><a href="{{ route('web.edit') }}" class="btn btn-primary" style="width: 100%;">edit</a></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection