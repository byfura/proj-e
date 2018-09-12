<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{csrf_token()}}' }</script>

        <title>Proj-E User</title>

        <!-- Fonts -->
        <link href="{{secure_asset('css/user.css')}}" rel="stylesheet" type="text/css">
        @yield('style')

    </head>
    <body id="page-top">
        @yield('content')
        <script type="text/javascript" src="{{secure_asset('js/user.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('js/user-jq.js')}}"></script>
        @yield('script')
    </body>
</html>
