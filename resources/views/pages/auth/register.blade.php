<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Website CSS style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"> 
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> -->
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <a href="{{ url('/') }}"><h1 class="title">SampahKu</h1></a>
                        <div class="register">
                            <h2>Register</h2>
                            <hr />
                        </div>
                    </div>
                </div> 
                <div class="main-register main-center">
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
                        <form class="form-horizontal" method="POST" action="{{ url('register')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="control-label">FullName</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Full Name"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone_no" class="control-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="phone_no" id="phone_no"  placeholder="Enter your Phone Number"/>
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
                                <label for="password_confirmation" class="control-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="Confirm your Password"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gender" class="control-label">Gender</label>
                                <div class="input-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="radio" value="0" name="gender"/> Male
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="radio" value="1" name="gender"/> Female
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-warning btn-lg btn-block register-button" name="register" value="Register">
                            </div>
                            <div class="login-register">
                                Has already have account?
                                <a href="{{ url('/login') }}">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>