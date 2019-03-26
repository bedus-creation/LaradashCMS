<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" value="{{csrf_token()}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/laradash/css/app.css">
    @yield('head')
</head>
<body>
    <div id="app">
        @include('theme.component.sidebar')
        <div id="main">
            @include('theme.component.navbar')
            @yield('content')
        </div>
    </div>
    <script src="{{url('/js/app.js')}}"></script>
    @include('theme.component.scripts')
    @yield('scripts')
</body>
</html>