<!DOCTYPE html>
<html lang='en'>
<head>
    <title>@yield('title', 'Sysmeh')</title>
    @include('includes.head')
</head>
<body class='skin-blue'>
    <div class='wrapper'>

        @include('includes.header')
        @include('includes.sidebar')



         <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ $page_title or "Page Title" }}
                    <small>{{ $page_description or null }}</small>
                </h1>
                <!-- You can dynamically generate breadcrumbs here -->
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Your Page Content Here -->
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->




        @include('includes.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    {!! HTML::script('/vendor/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! HTML::script('/vendor/bower_components/admin-lte/bootstrap/js/bootstrap.min.js') !!}
    <!-- AdminLTE App -->
    {!! HTML::script('/vendor/bower_components/admin-lte/dist/js/app.min.js') !!}

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->

</body>
</html>