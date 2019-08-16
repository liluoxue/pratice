<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.navbar');

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <div class="waifu">
        <div class="waifu-tips"></div>
        <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
        <div class="waifu-tool">
            <span class="fui-home"></span>
            <span class="fui-chat"></span>
            <span class="fui-eye"></span>
            <span class="fui-user"></span>
            <span class="fui-photo"></span>
            <span class="fui-info-circle"></span>
            <span class="fui-cross"></span>
        </div>
    </div>
    <script src="{{asset('assets/waifu-tips.js')}}"></script>
    <script src="{{asset('assets/live2d.js')}}"></script>

    <script type="text/javascript">initModel("{{asset('assets')}}")</script>

    <br>
    <a href="{{asset('assets/waifu-tips.js')}}"></a>
    <br>
    <a href="{{ asset('js/app.js') }}"></a>

</body>
</html>
