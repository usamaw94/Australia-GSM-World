<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'Australia GSM World - Admin') }}</title>
    <link rel="stylesheet" href="/adminAssets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminAssets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/adminAssets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminAssets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/adminAssets/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link href="/adminAssets/dist/css/style.css" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/home" class="logo">
            <span class="logo-mini">A<b>G</b>W</span>
            <span class="logo-lg">Australia<b>GSM</b>World</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    {{--<!-- Notifications Menu -->--}}
                    {{--<li class="dropdown notifications-menu">--}}
                        {{--<!-- Menu toggle button -->--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                            {{--<i class="fa fa-bell-o"></i>--}}
                            {{--<span class="label label-warning">10</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="header">You have 10 notifications</li>--}}
                            {{--<li>--}}
                                {{--<!-- Inner Menu: contains the notifications -->--}}
                                {{--<ul class="menu">--}}
                                    {{--<li><!-- start notification -->--}}
                                        {{--<a href="#">--}}
                                            {{--<i class="fa fa-users text-aqua"></i> 5 new members joined today--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<!-- end notification -->--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="footer"><a href="#">View all</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<!-- User Account Menu -->--}}
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img style="background-size: cover" src="/adminAssets/dist/img/logo.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img style="background-size: cover" src="/adminAssets/dist/img/logo.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name }}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/changePassword" class="btn btn-default btn-flat">Chang Password</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/adminAssets/dist/img/logo.jpg" style="background-size: cover" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <p><a><i class="fa fa-user-circle"></i> Admin</a></p>
                    <form id="signout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </div>
            </div>
            <!-- Sidebar Menu -->

            @yield('nav-links')
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

            <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
</div>

<!-- jQuery 3 -->
<script src="/adminAssets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminAssets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminAssets/dist/js/adminlte.min.js"></script>

<script src="/adminAssets/dist/js/custom.js"></script>
</body>
</html>
