<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('assets/js/html5shiv.js')}}"></script>
      <script src="{{ URL::asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIPP</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Dasar</a>
              <ul class="dropdown-menu">
                <li><a href="tahun">Tahun</a></li>
                <li><a href="visi">Visi</a></li>
                <li><a href="misi">Misi</a></li>
                <li><a href="tujuan">Tujuan &amp; Sasaran</a></li>
                <li><a href="indikator">Indikator</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container">
      @yield('content')
    </div>

    <script src="{{ URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    {{ $script }}
  </body>
</html>
