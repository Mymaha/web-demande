<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
        
        <link rel="stylesheet" href="{{asset('theme/dist/assets/stylesheets/theme.min.css')}}" data-skin="default">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/dist/assets/stylesheets/custom.css')}}">
        <link rel="stylesheet" href="{{asset('theme/dist/assets/vendor/flatpickr/flatpickr.min.css')}}">
</head>
<body>
        <div class="app">
                @yield('main-content')
        </div> 
         <script src="{{asset('theme/dist/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/dist/assets/javascript/theme.min.js')}}"></script>
        <script src="{{asset('theme/dist/assets/javascript/theme.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/flatpickr/flatpickr.min.js')}}"></script>



</body>
</html>