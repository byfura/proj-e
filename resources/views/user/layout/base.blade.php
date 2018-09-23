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
        <style type="text/css">
            .e-col {
                padding-right: 2.5px;
                padding-left: 2.5px;
                margin-bottom: 0px;
            }
            .e-col label {
                margin-bottom: 0px;
            }
            <?php $color = Helper::pastelMaker() ?>
            .e-bg-primary {
                background-color: rgb({!! $color[0] !!},{!! $color[1] !!},{!! $color[2] !!})
            }
            <?php $color = Helper::pastelMaker() ?>
            .e-bg-secondary {
                background-color: rgb({!! $color[0] !!},{!! $color[1] !!},{!! $color[2] !!})
            }
            .e-stars .checked {
                color: gold;
            }            
            footer {
                padding-top: 25px;
                overflow: hidden;
            }
            footer ul>li {
                display: inline-block;  
            }
            footer ul>li + li:before{
            content: " | ";
            padding: 0 10px;
            }
        </style>
        @yield('style')
    </head>
    <body id="page-top">
        @yield('content')
        <script type="text/javascript" src="{{secure_asset('js/user.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('js/user-jq.js')}}"></script>
        @yield('script')
    </body>
</html>
