<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
        
        <link rel="stylesheet" href="{{asset('theme/dist/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/dist/assets/stylesheets/theme.min.css')}}" data-skin="default">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/dist/assets/stylesheets/custom.css')}}">
        <link rel="stylesheet" href="{{asset('theme/dist/assets/vendor/flatpickr/flatpickr.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('theme/dist/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/dist/assets/vendor/fontawesome/css/all.css')}}">

</head>
<body>
        <div class="app">
            @include('components.user.header')
                @yield('main-content')
        </div> 
        <script src="{{asset('theme/dist/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('theme/dist/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/dist/assets/javascript/theme.min.js')}}"></script>
        @yield('page-script')



</body>
</html>