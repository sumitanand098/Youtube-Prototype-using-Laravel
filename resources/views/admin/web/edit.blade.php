@extends('layouts.admin-layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header"><h1>Website Edit</h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class="fa fa-globe"> Web-Edit</i></li>
  </ol>
</section>
<section class="container">
<div class="container">
<ul>
  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <div class="container">

      <div class="row">
          <div class="col-md-6 col-md-offset-2">
          <form role="form">
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="form-group">
                    <input type="text" name="Title" id="Title" class="form-control input-lg" placeholder="Website Name" tabindex="1">
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group">
                  <input type="text" name="age" id="age" class="form-control input-lg" placeholder="Formed" tabindex="2">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="5">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="contact" id="contact" class="form-control input-lg" placeholder="Contact Details" tabindex="6">
                </div>
              </div>
            </div>
            <div class="form-group">
              <textarea type="email" name="email" id="email" class="form-control input-lg" placeholder="Company Location" tabindex="4"></textarea>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="trailer" id="trailer" class="form-control input-lg" placeholder="Formed" tabindex="5">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="Main Video" id="Main Video" class="form-control input-lg" placeholder="Developed on" tabindex="6">
                </div>
              </div>
            </div>
            
            <hr class="colorgraph">
            <div class="row">
              <div class="col-xs-12 col-md-9"><a href="#" class="btn btn-success btn-block btn-lg"><input type="file" name="upload"></a></div>
              <div class="col-xs-12 col-md-3"><input type="submit" value="Upload" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            </div>
          </form>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
            </div>
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      </div>
    </div>
  </div>
</ul>
</section>
@endsection