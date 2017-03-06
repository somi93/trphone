<!DOCTYPE html>
<html ng-app="trendyphone" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <script src="{{ asset('js/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Trendy Phone</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/admin">Admin</a></li>
                <li><a href="/employees">Employees</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="row content">
            @yield('content')
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="text-muted">Copyright <a href="#">trendyphone.com </a>. All rights reserved.</p>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/controllers/employees.js') }}"></script>
</body>
</html>
