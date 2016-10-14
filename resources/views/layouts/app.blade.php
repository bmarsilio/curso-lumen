<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Agenda</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="{{ url('js/scripts.js') }}"></script>
</head>
<body>

<div class="container">

    @include('layouts.partial.header')

    <div class="row">
        @yield('content')
    </div>

</div>

</body>
</html>