<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proj-E</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="app">
            <form-privilege></form-privilege>
        </div>
        <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
    </body>
</html>
