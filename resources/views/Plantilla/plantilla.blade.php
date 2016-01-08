<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> @yield('titulo') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css" media="print"/>
    <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js" type="text/javascript"></script>
    <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/css/estilosz.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the pages via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">
    @include('Plantilla/header')
            <!--SIDEBAR ACA-->

    <!-- Sidebar user panel -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    @include('Plantilla\sidebar')


            <!--FIN DEL SIDEBAR-->
    <!-- Content Wrapper. Contains pages content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('headerpage')

                <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @include('Plantilla/footer')
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->

<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/Bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
<script src="{{asset('/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!-- datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}" type="text/javascript"></script>
@yield('addscripts')
</body>
</html>