<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Title and Meta--}}
 

    {{--Common App Styles--}}
    {{ Html::style(mix('assets/app/css/app.css')) }}
    {{ HTML::style('assets/app/css/style.css') }}
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    {{--Styles--}}
    @yield('styles')
    
    {{--Head--}}
    @yield('head')

</head>
<body class="@yield('body_class')" style="-webkit-print-color-adjust: exact;">


   @yield('page')

   {{ Html::script(mix('assets/app/js/app.js')) }}


   @tojs


   @yield('scripts')
</body>
</html>
