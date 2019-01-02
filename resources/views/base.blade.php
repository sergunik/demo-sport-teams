<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            color: #fff;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background-image: radial-gradient(circle, rgb(60, 99, 146) 0%, rgb(5, 48, 88) 100%);
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            height: 100vh;
            position: relative;

        }
        .site-name {
            font-size: 64pt;
            text-shadow: rgba(0, 0, 0, 0.5) 1px 1px 0px;
            margin-top: -15%;
            font-weight: 100;
        }
        .links > a {
            color: #fff;
            padding: 0 20px;
            font-size: 12px;
            font-weight: 100;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links > a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
@yield('body')
</body>
</html>
