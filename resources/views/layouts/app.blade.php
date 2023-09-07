<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="https://code.highcharts.com/highcharts.js"></script>

    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>