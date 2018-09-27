<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Proj-E">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Proj-E">

    <meta name="theme-color" content="#4C7FF0">
    
    <title>Proj-E</title>

    <!-- page stylesheets -->
    <link rel="stylesheet" href="{{asset('vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <!-- end page stylesheets -->

    <!-- page stylesheets -->
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}">
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/app.css')}}" id="load_styles_before"/>
    <link rel="stylesheet" href="{{asset('styles/app.skins.css')}}"/>

    {{ $slot }}
    <!-- endbuild -->
  </head>