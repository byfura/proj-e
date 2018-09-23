<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>

        <title>Proj-E</title>

        <!-- Fonts -->
        <link href="{{secure_asset('css/admin.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body id="page-top">
        <div id="app">
            <nav-bar></nav-bar>
            <div id="wrapper">
                <side-bar></side-bar>
                <div id="content-wrapper" class="container">
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{secure_asset('js/admin.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('js/admin-jq.js')}}"></script>
    </body>
</html>
