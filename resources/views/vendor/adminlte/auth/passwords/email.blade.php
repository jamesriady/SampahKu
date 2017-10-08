@extends('pages.front-end.layouts.template')
@section('title', 'Lupa Password')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/password-reset.css') }}"> 
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
@endsection
@section('content')
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <a href="{{ url('/') }}"><h1 class="title">SampahKu</h1></a>
                        <div class="reset">
                            <h2>Lupa Password</h2>
                            <hr />
                        </div>
                    </div>
                </div> 
                <div class="main-reset main-center">
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
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ url('password/email')}}">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-lg btn-block reset-button">{{ trans('adminlte_lang::message.sendpassword') }}</button>
                            </div>
                            <div class="back form-group">
                                <a href="{{ url('/login') }}">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection