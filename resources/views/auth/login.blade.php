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
                        <div class="Spacer-5"></div>
                        <a href="/register" class="forgot">SignUp<i class="fa fa-chevron-right signin-arrow"></i></a>
                    </div>
                    <div class="clear-both"></div>
                    <div class="Spacer-5"></div>

                    <h2 class="signup-head center-align top">StreamNow</h2>
                    <!-- FORM STARTS -->
                    <div class="Spacer-5"></div>
                    <div class="Spacer-5"></div>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="text" id="input-1" name="email" />
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2" data-content="Email">
                                <span class="input__label-content input__label-content--hoshi"><h5>Email</h5></span>
                            </label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </span>
                        <div class="Spacer-5"></div>
                            <span class="input input--hoshi">
                            <input class="input__field input__field--hoshi" type="Password" id="input-1" name="password" />
                            <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3" data-content="Password">
                                <span class="input__label-content input__label-content--hoshi"><h5>Password</h5></span>
                            </label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </span>
                        <div class="Spacer-5"></div>
                        <div class="Spacer-5"></div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-1">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        <div class="Spacer-5"></div>
                        <div class="Spacer-5"></div>
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