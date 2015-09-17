<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Sysmeh')</title>
    @include('includes.head')
</head>
<body class="skin-blue">
    <div class="wrapper">

        @include('includes.header')
        @yield('content')
        @include('includes.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.3 -->
    {!! HTML::script("/vendor/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! HTML::script("/vendor/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") !!}
    <!-- AdminLTE App -->
    {!! HTML::script("/vendor/bower_components/admin-lte/dist/js/app.min.js") !!}

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->

</body>
</html>