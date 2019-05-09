<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @section('sidebar')
    
    @show

    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>