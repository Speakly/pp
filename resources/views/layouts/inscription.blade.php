<!DOCTYPE html>

<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="_token" content="{!! csrf_token() !!}"/> --}}

    <link rel="stylesheet" href="{{ URL::asset('assets/css/skin-orange.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.less') }}" type="text/css">
    <!--<link href="{{ URL::asset('assets/css/fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" type="text/css">
    

    @yield('css')
   

    <title>Profilplayers Basket - @yield('title', 'Suis tes performances !')</title>
</head>

<body>

    @yield('content')

<script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>


@yield('scripts')

</body>
</html>