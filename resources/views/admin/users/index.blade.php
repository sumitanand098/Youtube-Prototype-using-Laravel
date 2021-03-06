@extends('layouts.admin-layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header"><h1>Users<small>Control panel</small></h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class="fa fa-user"> Users</i></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header label-primary">
          <b style="font-size:18px;">Users</b>
          <a href="{{ route('users.create') }}" class="btn btn-default pull-right">Add Users</a>
        </div>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="th-sm">ID
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Name
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Email
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Image
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
              <th class="th-sm">Action
                <i class="fa fa-sort float-right" aria-hidden="true"></i>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $value)
            <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td><img src="{{ $value->image }}" style="max-height: 30px !important; max-width: 50px !important;"></td>
              <td>
                <ul class="admin-action btn btn-default">
                  <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Action <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.view', $value->id) }}">View</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.edit') }}/{{ $value->id }}">Edit</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('users.delete', $value->id) }}">Delete</a></li>
                      <li role="presentation" class="divider"></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Approve</a></li>
                    </ul>
                  </div>
                </ul>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>ID</i>
              </th>
              <th>Name</i>
              </th>
              <th>Email</i>
              </th>
              <th>Action</i>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection