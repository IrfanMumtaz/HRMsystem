@extends('layouts.app')

<body  id="container">
<div class="container">
        <header>
            <!-- Main comapny header -->
        
        </header>
        <section id="form" class="animated fadeInDown">
            <div class="container">    
                <div id="loginbox" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel login-logo" >
                        <h2 class="loginHeading">PLEASE LOGIN HERE</h2>
                        <div class="panel-body" >
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                <form id="loginform" class="form-horizontal" role="form"  method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}"></div>
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="Email">
                                    @if  ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"></div>
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group col-xs-12 text-center login-action">
                                  <div class="checkbox">
                                    <label>
                                      <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;"> Remember me &nbsp;
                                        <span id="btn-login">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-sign-in"></i> Login
                                            </button>
                                        </span>
                                    </label> 
                                    <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                                  </div>
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      
                                    </div>
                                </div>
                            </form>     
                        </div>                     
                    </div>  
                </div>
            </div>
        </section>
    </div>
</div>
</body>
