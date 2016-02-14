<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cache-control" content="no-cache">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Styles -->
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Boostrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/default-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-style.css') }}">
        

        <style>
            body {
                /*font-family: 'Lato';*/
            }

            .fa-btn {
                margin-right: 6px;
            }
        </style>

        @yield('nav-head')
        @yield('head')
    </head>

    <body data-spy="scroll" data-target=".scrollspy" id="app-layout">
        @include('layouts.header')
        
        @yield('content')
        @include('layouts.footer')

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
