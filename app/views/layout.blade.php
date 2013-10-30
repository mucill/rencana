<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
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
            <li><a href="/">Dashboard</a></li>
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Data Dasar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="tahun">Tahun</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="visi">Visi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="misi">Misi</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="tujuan">Tujuan</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="sasaran">Sasaran</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="indikator">Indikator</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Usulan<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="tahun">Kecamatan</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="visi">SKPD</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">RKPD<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="tahun">Rancangan</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="visi">Rancangan Akhir</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="visi">Finalisasi RKPD</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1"  href="visi">Finalisasi Renja</a></li>
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
