@extends('pages.front-end.layouts.template')
@section('title', 'Daftar')
@section('css')
        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}"> 
        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
@endsection
@section('content')
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <a href="{{ url('/') }}"><h1 class="title">SampahKu</h1></a>
                        <div class="register">
                            <h2>Daftar</h2>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="tabs-register">
                        <ul class="nav nav-tabs" role="tablist" id="myTab" >
                          <li name="customer" class="customer active"><a href="#customer" data-toggle="tab">Customer</a></li>
                          <li name="pemulung" class="pemulung"><a href="#pemulung" data-toggle="tab">Porter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content col-xs-12 col-sm-12 col-md-12">
                    <div class="tab-category tab-pane fade in active" id="customer">
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
                                            <input type="text" class="form-control" name="name" id="name" />
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email" />
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="control-label">Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="phone" id="phone" />
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password" />
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation" class="control-label">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" />
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
                

                    <div class="tab-category tab-pane fade" id="pemulung">
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
                                <form class="form-horizontal" method="POST" action="{{ url('registerPorter')}}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label for="name" class="control-label">FullName</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name" />
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_identitas" class="control-label">No. Identitas</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="no_identitas" id="no_identitas" />
                                            @if ($errors->has('no_identitas'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('no_identitas') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email" />
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="control-label">Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="phone" id="phone" />
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password" />
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation" class="control-label">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" />
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
                </div>
            </div>
        </div>
@endsection
@section('js')
@endsection