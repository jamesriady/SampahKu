<!DOCTYPE html>
<html lang="id">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>@yield('title')</title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/template.css') }}">
      <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
      @yield('css')
    </head>
    <body>
   @include('sweet::alert')
   @if(Auth::user())
   @if(Auth::user()->activation->completed != 1)
   <script type="text/javascript"> sweetAlert("Kamu belum melakukan verifikasi. Harap segera melakukan verifikasi melalui email yang dikirimkan"); </script>
   @endif
   @endif
    <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img src="{{asset('vendor/images/logo.png')}}" class="logo"></a>
              </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class={{Request::is('/') ? 'active' : ''}}>
            <a href="{{url('/')}}">Beranda</a>
          </li>
          <li class={{Request::is('tentangkami') ? 'active' : ''}}><a href="{{ url('/tentangkami') }}">Tentang Kami</a></li>
          <li class={{Request::is('hubungikami') ? 'active' : ''}}><a href="{{ url('/hubungikami') }}">Hubungi Kami</a></li>
          @if(Auth::user())
          @if(Auth::user()->customer_id != null)
          <li style="text-transform: uppercase;"><a href="#"><b>{{Auth::user()->customer->name}}</b></a></li>
          @else
          <li style="text-transform: uppercase;"><a href="#">{{Auth::user()->pemulung->name}}</a></li>
          @endif
          <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="nav-item-child nav-item-hover">
               logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
          @else
          <li class={{Request::is('login') ? 'active' : ''}}><a href="{{ url('/login') }}" class="login">Masuk</a></li>
          <li class={{Request::is('register') ? 'active' : ''}}><a href="{{ url('/register') }}" class="register">Daftar</a></li>
          @endif
        </ul>  
      </div>
    </div>
  </nav>
  @yield('content')
  <footer id="myFooter">
    <div class="container footer">
        <div class="row">
            <div class="col-sm-3">
              <a href="#"><img src="{{asset('vendor/images/logo.png')}}" class="footer-logo"></a>
            </div>
            <div class="col-sm-3">
                <h5>Tentang kami</h5>
                <ul>
                    <li><a href="#">Informasi Perusahaan</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Bantuan</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help desk</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-sm-3 info">
                <h5>Informasi</h5>
                <p>SampahKu adalah sebuah startup yang bergerak di bidang jual beli sampah, baik sampah organik maupun non organik</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>