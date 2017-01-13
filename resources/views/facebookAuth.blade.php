@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="loginbox" style="margin-top:50px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    Sign In
                </div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px">
                    <a href="#">
                        Forgot password?
                    </a>
                </div>
            </div>
            <div class="panel-body" style="padding-top:30px">
                <div class="alert alert-danger col-sm-12" id="login-alert" style="display:none">
                </div>
                <form class="form-horizontal" id="loginform" role="form">
                    <div class="input-group" style="margin-bottom: 25px">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user">
                            </i>
                        </span>
                        <input class="form-control" id="login-username" name="username" placeholder="username or email" type="text" value="">
                        </input>
                    </div>
                    <div class="input-group" style="margin-bottom: 25px">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock">
                            </i>
                        </span>
                        <input class="form-control" id="login-password" name="password" placeholder="password" type="password">
                        </input>
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" name="remember" type="checkbox" value="1">
                                    Remember me
                                </input>
                            </label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:10px">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <a class="btn btn-success" href="#" id="btn-login">
                                Login
                            </a>
                            <a class="btn btn-primary" href="{{ url('auth/facebook') }}" id="btn-fblogin">
                                <i class="fa fa-facebook"></i> Login with Facebook
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Don't have an account!
                                <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection