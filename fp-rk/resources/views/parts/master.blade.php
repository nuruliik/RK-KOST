<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/kube.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/unoj.css')}}">
        <title>@yield('title') | UNOJ</title>
    </head>
    <body>
        @include('parts.navbar')
        @yield('content')
        @include('parts.footer')
        
        <script src="{{url('js/jquery-3.2.0.min.js')}}"></script>
        <script src="{{url('js/kube.min.js')}}"></script>
        @yield('pagescript')
        
    </body>
</html>