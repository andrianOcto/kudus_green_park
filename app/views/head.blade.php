<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo-hiddenpark.png">

    <title>RTH Kab. Kudus</title>
    
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery.ad-gallery.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/lib/angular.min.js') }}"></script> 
    <script src="{{ URL::asset('js/angular-file-upload.min.js') }}"></script> 
    <script src="{{ URL::asset('js/page/userSubmit.js') }}"></script> 
    <script src="{{ URL::asset('js/page/data_post.js') }}"></script> 
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#5cb85c; border-color:#5cb85c; color:white">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="color:white">Administrator Sistem Informasi Ruang Terbuka Hijau Kabupaten Kudus</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a style="color:white" href="user/{{ Session::get('iduser'); }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Session::get('username'); }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><center><img class="img-circle" style="width:70px; margin-top:5px;" src="{{ URL::asset('files/photos/user') }}/{{ Session::get('foto') }}"></center></li>
                    <li><a href="/logout" style="text-align:center; color:black; margin-top:10px"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  logout</a></li>
                </ul>
            </li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container-fluid">
        <div class="row" style="margin-top:50px">
            <div class="col-sm-2 col-md-2">
                <center><img src="{{ URL::asset('images/logo-kab-kudus.png') }}" style="width:80px; padding-top:20px; padding-bottom:30px;"></center>
                <ul class="nav nav-pills nav-stacked">
                    <li style="border-right: 4px solid #428bca"><a href="/home"><p align="right" style="color:black"><b style="padding-right:10px">Dashboard</b></p></a></li>
                    <li style="border-right: 4px solid #5cb85c"><a href="/park"><p align="right" style="color:black"><b style="padding-right:10px">Setting Video</b></p></a></li>
                    <li style="border-right: 4px solid #5cb85c"><a href="/park"><p align="right" style="color:black"><b style="padding-right:10px">Data RTH</b></p></a></li>
                    <li style="border-right: 4px solid #f0ad4e"><a href="/jenis"><p align="right" style="color:black"><b style="padding-right:10px">Jenis RTH</b></p></a></li>
                    <li style="border-right: 4px solid #428bca"><a href="/kecamatan"><p align="right" style="color:black"><b style="padding-right:10px">Kecamatan</b></p></a></li>
                    <li style="border-right: 4px solid #5cb85c"><a href="/park"><p align="right" style="color:black"><b style="padding-right:10px">Desa</b></p></a></li>
                    <li style="border-right: 4px solid #f0ad4e"><a href="/user"><p align="right" style="color:black"><b style="padding-right:10px">Users</b></p></a></li>
                </ul>
            </div>
            <div class="col-sm-10 col-md-10" style="margin-top:20px; width:80%">