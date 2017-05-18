<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/kube.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/unoj.css')}}">
        @yield('pagecss')
        <link rel="icon" href="{{url('img/favicon.png')}}" type="image/png">
        <title>@yield('title') | UNOJ</title>
    </head>
    <body>
        @include('parts.navbar')
        <div id="spinner">
            <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
            <span class="sr-only">Loading...</span>
        </div>
        @yield('content')
        @include('parts.footer')
        
        <script src="{{url('js/jquery-3.2.0.min.js')}}"></script>
        <script src="{{url('js/kube.min.js')}}"></script>
        @yield('pagescript')
        <script>
            $(document).ready(function(){
                $('#spinner').fadeOut('fast');
            });
        </script>
        
    </body>
</html>