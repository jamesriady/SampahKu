<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Website CSS style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Away G | Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <a href="{{ url('/') }}"><h1 class="title">Away G</h1></a>
                        <div class="login">
                            <h2>Login</h2>
                            <hr />
                        </div>
                    </div>
                </div> 
                <div class="main-login main-center">
                     <div class="row">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ url('login')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Username"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="login" value="Login">
                            </div>
                            <div class="forgot-password">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="login-register">
                                Does not have any account?
                                <a href="{{ url('/register') }}">Register here</a>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>