@extends('pages.front-end.layouts.template')
@section('title', 'Atur Ulang Password')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@endsection
@section('content')
<div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <a href="{{ url('/') }}"><h1 class="title">SampahKu</h1></a>
                        <div class="resetPassword">
                            <h2>Atur Ulang Password</h2>
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
                        <form class="form-horizontal" method="POST" action="{{ url('/password/reset') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Password Baru</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Konfirmasi Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" />
                                </div>
                            </div>

                            <div class="form-group">
                               <button type="submit" class="btn btn-warning btn-block btn-flat">{{ trans('adminlte_lang::message.passwordreset') }}</button>
                            </div>
                        </form>
                        <a href="{{ url('/login') }}">Masuk</a><br>
                        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
