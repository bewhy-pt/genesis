<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    {{-- TODO favicon--}}
    <link rel="icon" href="" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <title>Genesis @yield('page-title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" />

    <link href="{{ asset("template/genesis/assets/css/dashboard.css") }}" rel="stylesheet" />
    <link href="{{ asset("css/genesis.css") }}" rel="stylesheet" />


    @yield('header-styles')

    {{-- Because of require.js, scripts are loaded before --}}
    @yield('header-scripts')

    <script src="{{ asset("template/genesis/assets/js/require.min.js") }}"></script>
    <script>
        requirejs.config({
            baseUrl: '{{ asset("template/genesis/") }}',
        });
    </script>

    <script src="{{ asset("template/genesis/assets/js/dashboard.js") }}"></script>
