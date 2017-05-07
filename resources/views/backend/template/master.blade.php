<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pratama Krida | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    {!! Html::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome Icons -->
    {!! Html::style('bower_components/font-awesome/css/font-awesome.min.css') !!}
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    @yield('style')
    <!-- Theme style -->
    {!! Html::style('bower_components/AdminLTE/dist/css/AdminLTE.min.css') !!}
    {!! Html::style('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') !!}    
    {!! Html::style('bower_components/AdminLTE/plugins/pace/pace.min.css') !!}
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Header -->
        @include('backend.template.partial.navbar')

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
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Footer -->
        @include('backend.template.partial.sidebar')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    {!! Html::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') !!}

    <!-- AdminLTE App -->
    {!! Html::script('bower_components/AdminLTE/plugins/fastclick/fastclick.min.js') !!}
    {!! Html::script('bower_components/AdminLTE/dist/js/app.min.js') !!}
    {!! Html::script('bower_components/AdminLTE/plugins/daterangepicker/moment.min.js') !!}
    @yield('scripts')
    {!! Html::script('bower_components/AdminLTE/dist/js/demo.js') !!}
    {!! Html::script('bower_components/AdminLTE/plugins/pace/pace.min.js') !!}
    
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->
</body>
</html>