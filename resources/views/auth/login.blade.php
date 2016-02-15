<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/favicon.png">
    <title>ERS Template</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../css/all.css" type="text/css"/>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
  </head>
  <body class="ers-splash-screen">
    <div class="ers-wrapper ers-login">
      <div class="ers-content">
            <div class="main-content">
                <div class="login-container">
                    <div class="panel panel-default">
                        <div class="panel-heading"><img src="../images/logo-white.png" alt="logo" width="100px" height="100px" class="logo-img">
                            <h2>myERS</h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            <div class="login-form">
                                    {!! csrf_field() !!}
                                <div class="form-group{{ $errors->has('usernmae') ? ' has-error' : '' }}">
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <input id="username" type="text" placeholder="Username" autocomplete="off" class="form-control" name="username"> 
                                    </span>
                                  </div>
                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif                                  
                                </div>
                                    
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <input id="password" type="password" placeholder="Password" class="form-control" name="password">
                                    </span> 
                                  </div>
                                    @if ($errors->has('password'))                                               
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>


                                 <div class="form-group login-submit">
                                  <p class="conditions">Need a myERS account? <a href="#">Sign up</a>.</p>
                                  <button data-dismiss="modal" type="submit" class="btn btn-alt-special btn-lg">Log me in</button>
                                </div>
                                <div class="form-group footer row">
                                  <div class="col-xs-6"><a href="#">Forgot Password?</a></div>
                                  <div class="col-xs-6 remember">
                                    <label for="remember">Remember Me</label>
                                    <div class="ers-checkbox">
                                      <input type="checkbox" id="remember" name="remember">
                                      <label for="remember"></label>
                                    </div>
                                  </div>
                                </div>

                             </div>       
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script src="../js/all.js" type="text/javascript"></script>
  </body>
</html>