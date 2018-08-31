<!DOCTYPE html>
<html>
<head>
    @include('layouts.users.head')
</head>
<body>
    <div class="wrapper bg-grey">
        @include('layouts.users.header')
        <div class="top-spacing"></div>
        <!-- BODY STARTS-->
        <div class="main body-img" style="background-image: url({{ URL::asset('assets/users/img/bg-video-default.jpg') }});">
            <div class="overlay section-spacing">
                <div class="signup-form">
                    <div class="right-align">
                        <a href="/login" class="forgot">SignIn<i class="fa fa-chevron-right signin-arrow"></i></a>
                    </div>
                    <div class="clear-both"></div>
                    <h2 class="signup-head center-align top">StreamNow</h2>
                    <!-- <div class="Spacer-8"></div> -->
                    <!-- FORM STARTS -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="text" id="input-2" name="name">
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2" data-content="Name">
                            <span class="input__label-content input__label-content--hoshi"><h4><strong>Name</strong></h4></span>
                            </label>
                        </span>
                        <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="email" id="input-3" name="email">
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3" data-content="Email">
                            <span class="input__label-content input__label-content--hoshi"><h4><strong>Email</strong></h4></span>
                            </label>
                        </span>
                        <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="password" id="input-4" name="password">
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4" data-content="Password">
                            <span class="input__label-content input__label-content--hoshi"><h4><strong>Password</strong></h4></span>
                            </label>
                        </span>
                        <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="password" id="input-4" name="password_confirmation">
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4" data-content="Password">
                            <span class="input__label-content input__label-content--hoshi"><h4><strong>Confirm Password</strong></h4></span>
                            </label>
                        </span>

                        <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
-->
                        <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.users.js')
</body>
</html>
