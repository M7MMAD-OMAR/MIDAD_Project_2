<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #1a202c;
            color: #f7fafc;
            margin: auto;
            width: 50%;
        }
        h1, h4 {
            text-align: center;
            margin-bottom: 40px;
        }
        a {
            color: #f7fafc;
            text-decoration: none;
        }
        a input {
            cursor: pointer;
        }
    </style>
    @yield('style')
</head>
<body>
    <h1>Laravel Project</h1>
    @yield('content')

</body>
</html>
