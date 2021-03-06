@extends('pages.front-end.layouts.template')
@section('title', 'Beranda')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/beranda.css') }}">
@endsection
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{asset('vendor/images/pemilahan sampah.jpg')}}" alt="Los Angeles" style="width:100%;height: 400px">
        </div>

        <div class="item">
          <img src="{{asset('vendor/images/pemilahan sampah.jpg')}}" alt="Chicago" style="width:100%;height: 400px">
        </div>
      
        <div class="item">
          <img src="{{asset('vendor/images/pemilahan sampah.jpg')}}" alt="New york" style="width:100%;height: 400px">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <div class="container-fluid background">
    <div class="row">
      <center>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="kelola-sampah-wrap">
          <div class="col-md-3"></div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="{{asset('vendor/images/sampah plastik.png')}}" class="sampah-gambar">
            <p class="u-mt2 u-mb2 ms-text__subtitle">Jual Sampah</p>
            <p class="u-m0">Jual sampah anda dan dapatkan bonus dari kami</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="{{asset('vendor/images/sampah organik.png')}}" class="sampah-gambar">
            <p class="u-mt2 u-mb2 ms-text__subtitle">Beli Sampah</p>
            <p class="u-m0">Berikanlah sampah anda secara gratis kepada pemulung terdekat untuk didaur ulang</p>
          </div>
          <div class="col-md-3"></div>
      </div>
      </center>
    </div>
  </div>

  <div class="page-header">
    <div class="col-md-1"></div>
    <div class="col-xs-12 col-sm-12 col-md-10">
      <p class="pull-left">
        <span class="porter">Porter</span>
      </p>
      <a href="" class="pull-right see-all">Lihat semua</a>
    </div>
    <div class="col-md-1"></div>
  </div>
  <div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
  </div>

@endsection