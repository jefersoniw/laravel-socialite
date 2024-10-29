<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard - {{ env('APP_NAME') }} </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{ asset('clear_theme/img/favicon.ico') }}" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{ asset('clear_theme/css/app.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('clear_theme/css/custom.css') }}">

    <!-- end of global css -->
</head>

<body class="skin-default">
    <div class="preloader">
        <div class="loader_img"><img src="{{ asset('clear_theme/img/loader.gif') }}" alt="loading..." height="64"
                width="64"></div>
    </div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the marginin -->
                <img src="{{ asset('clear_theme/img/logo_white.png') }}" alt="logo" />
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <div class="mr-auto">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                        class="fa fa-fw ti-menu"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user d-block" data-toggle="dropdown">
                            <img src="{{ asset('clear_theme/img/original.jpg') }}" width="35"
                                class="rounded-circle img-fluid float-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                    {{ auth()->user()->name }}
                                    <span><i class="fa fa-sort-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('clear_theme/img/original.jpg') }}" class="rounded-circle"
                                    alt="User Image">
                                <p> {{ auth()->user()->name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="p-t-3"><a href="user_profile.html" class="dropdown-item"> <i
                                        class="fa fa-fw ti-user"></i> My Profile </a>
                            </li>
                            <li role="presentation"></li>
                            <li><a href="edit_user.html" class="dropdown-item"><i class="fa fa-fw ti-settings"></i>
                                    Account Settings </a></li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="float-right">
                                    <a href="{{ route('logout') }}">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="float-left profile-thumb" href="#">
                                <img src="{{ asset('clear_theme/img/original.jpg') }}" class="rounded-circle"
                                    alt="User Image"></a>
                            <div class="content-profile">
                                <h4 class="media-heading">{{ auth()->user()->name }}</h4>
                                <ul class="icon-list">
                                    <li>
                                        <a href="users.html" title="user">
                                            <i class="fa fa-fw ti-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="lockscreen.html" title="lock">
                                            <i class="fa fa-fw ti-lock"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="edit_user.html" title="settings">
                                            <i class="fa fa-fw ti-settings"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.html" title="Login">
                                            <i class="fa fa-fw ti-shift-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li class="active">
                            <a href="index.html">
                                <i class="menu-icon ti-desktop"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Seja bem vindo!</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-fw ti-home"></i> Dashboard
                        </a>
                    </li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <span>Provider Autenticador: {{ auth()->user()->provider_name }}</span>
                    </div>
                </div>
                <div class="background-overlay"></div>
            </section>
            <!-- /.content -->


        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="{{ asset('clear_theme/js/app.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->

</body>

</html>
