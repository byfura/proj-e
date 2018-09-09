<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>

        <title>Proj-E</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body id="page-top">
        <div id="app">
            <nav-bar></nav-bar>
            <div id="wrapper">
                <side-bar></side-bar>
                <div id="content-wrapper">
                    <router-view></router-view>
                </div>
            </div>
            <p>
            <router-link to="/input">Go to Foo</router-link>
            <router-link to="/view">Go to Bar</router-link>
            </p>
            
        </div>
        <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/admin-jq.js')}}"></script>
    </body>
</html>
