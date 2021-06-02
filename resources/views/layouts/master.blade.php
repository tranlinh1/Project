
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{--Styles css common--}}
    <link rel="stylesheet" href="{{ asset('boostrap-3.3.7/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prj.css') }}">
    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>
<body>
    <div class="container-storage">
        
        @include('partial.header')

        @yield('content')

        @include('partial.footer')
    </div>

    {{--Scripts js common--}}
    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('boostrap-3.3.7/js/bootstrap.min.js') }}"></script>
    {{--Scripts link to file or js custom--}}
    @yield('scripts')
    <script>
        function bigImg(x){
            x.style.height ="200px";
            x.style.width = "200px";
        }

        function normalImg(x){
            x.style.height = "180px";
            x.style.width = "180px";
        }
    </script>
</body>
</html>
