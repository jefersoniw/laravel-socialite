<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Blank | Clear Admin Template </title>
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
                                <img src="{{ asset('clear_theme/img/authors/avatar1.jpg') }}" class="rounded-circle"
                                    alt="User Image"></a>
                            <div class="content-profile">
                                <h4 class="media-heading">Addison</h4>
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
                        <li>
                            <a href="index.html">
                                <i class="menu-icon ti-desktop"></i>
                                <span class="mm-text ">Dashboard 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="index2.html">
                                <i class="menu-icon ti-layout-list-large-image"></i>
                                <span class="mm-text ">Dashboard 2</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="javascript:void(0)">
                                <i class="menu-icon ti-check-box"></i>
                                <span>Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-fw ti-receipt"></i> Features
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu p-l-40">
                                        <li> <a href="form_elements.html"> <i class="fa fa-fw ti-cup"></i> Form
                                                Elements </a> </li>
                                        <li> <a href="realtime_form.html"> <i class="fa fa-fw ti-write"></i> Realtime
                                                Forms </a> </li>
                                        <li>
                                            <a href="form_validations.html">
                                                <i class="fa fa-fw ti-alert"></i> Form Validations
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form_layouts.html">
                                                <i class="fa fa-fw ti-layout-width-default"></i> Form Layouts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="complex_forms.html">
                                                <i class="fa fa-fw ti-layout-cta-left"></i> Complex Forms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="complex_forms2.html">
                                                <i class="fa fa-fw ti-layout-cta-center"></i> Complex Forms 2
                                            </a>
                                        </li>

                                        <li>
                                            <a href="radio_checkboxes.html">
                                                <i class="fa fa-fw ti-check-box"></i> Radio and Checkbox
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-fw ti-clipboard"></i> Components
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu p-l-40">
                                        <li>
                                            <a href="form_editors.html">
                                                <i class="fa fa-fw ti-pencil"></i> Form Editors
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form_wizards.html">
                                                <i class="fa fa-fw ti-settings"></i> Form Wizards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dropdowns.html">
                                                <i class="fa fa-fw ti-widget-alt"></i> Drop Downs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="datepicker.html">
                                                <i class="fa fa-fw ti-calendar"></i> Date pickers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advanceddate_pickers.html">
                                                <i class="fa fa-fw ti-notepad"></i> Advanced Date pickers
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-desktop"></i>
                                <span>
                                    UI Features
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="general_components.html">
                                        <i class="fa fa-fw ti-plug"></i> General Components
                                    </a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        <i class="fa fa-fw ti-layout-placeholder"></i> Buttons
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs_accordions.html">
                                        <i class="fa fa-fw ti-layers"></i> Tabs &amp; Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="fonts.html">
                                        <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_modals.html">
                                        <i class="fa fa-fw ti-brush-alt"></i> Advanced Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <i class="fa fa-fw ti-time"></i> Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html">
                                        <i class="fa fa-fw ti-flag-alt"></i> Notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-briefcase"></i>
                                <span>
                                    UI Components
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="pickers.html">
                                        <i class="fa fa-fw ti-brush"></i> Pickers
                                    </a>
                                </li>
                                <li>
                                    <a href="grid_layout.html">
                                        <i class="fa fa-fw ti-layout-grid2"></i> Grid Layout
                                    </a>
                                </li>
                                <li>
                                    <a href="tags_input.html">
                                        <i class="fa fa-fw ti-tag"></i> Tags Input
                                    </a>
                                </li>
                                <li>
                                    <a href="nestable_list.html">
                                        <i class="fa fa-fw ti-view-list"></i> Nestable List
                                    </a>
                                </li>
                                <li>
                                    <a href="sweet_alert.html">
                                        <i class="fa fa-fw ti-bell"></i> Sweet Alert
                                    </a>
                                </li>
                                <li>
                                    <a href="toastr_notifications.html">
                                        <i class="fa fa-fw ti-tablet"></i> Toastr Notifications
                                    </a>
                                </li>
                                <li><a href="draggable_portlets.html"> <i class="fa fa-fw ti-control-shuffle"></i>
                                        Draggable
                                        Portlets </a></li>
                                <li><a href="jstree.html"> <i class="fa fa-fw ti-folder"></i> jstree </a></li>
                                <li>
                                    <a href="transitions.html"> <i class="fa fa-fw ti-star"></i> Transitions </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-widget"></i>
                                <span>Widgets</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="widgets.html">
                                        <i class=" menu-icon fa fa-fw ti-widgetized"></i>
                                        Widgets 1
                                    </a>
                                </li>
                                <li>
                                    <a href="widgets1.html">
                                        <i class=" menu-icon fa fa-fw ti-widget-alt"></i>
                                        Widgets 2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-layout-grid4"></i>
                                <span>DataTables</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="simple_tables.html">
                                        <i class="fa fa-fw ti-layout"></i> Simple tables
                                    </a>
                                </li>
                                <li>
                                    <a href="datatables.html">
                                        <i class="fa fa-fw ti-server"></i> Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_datatables.html">
                                        <i class="fa fa-fw ti-layout-grid3"></i> Advanced Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="responsive_datatables.html">
                                        <i class="fa fa-fw ti-layout-accordion-merged"></i> Responsive DataTables
                                    </a>
                                </li>
                                <li>
                                    <a href="bootstrap_tables.html">
                                        <i class="fa fa-fw ti-layout-grid2"></i> Bootstrap Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#"> <i class="menu-icon ti-bar-chart"></i>
                                <span>Charts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="flot_charts.html">
                                        <i class="fa fa-fw ti-bar-chart-alt"></i> Flot Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="nvd3_charts.html"> <i class="fa fa-fw ti-stats-up"></i> NVD3 Charts </a>
                                </li>
                                <li>
                                    <a href="circle_sliders.html"> <i class="fa fa-fw ti-basketball"></i> Circle
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="chartjs_charts.html"> <i class="fa fa-fw ti-pie-chart"></i> Chartjs
                                        Charts </a>
                                </li>
                                <li>
                                    <a href="dimple_charts.html"> <i class="fa fa-fw ti-save-alt"></i> Dimple Charts
                                    </a>
                                </li>
                                <li>
                                    <a href="amcharts.html"> <i class="fa fa-fw ti-stats-up"></i> Amcharts </a>
                                </li>
                                <li>
                                    <a href="chartist.html"> <i class="fa fa-fw ti-bar-chart"></i> Chartist Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-calendar"></i>
                                <span>Calendar</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="calendar.html">
                                        <i class=" menu-icon fa fa-fw ti-video-clapper"></i>
                                        <span>Calendar</span>
                                        <small class="badge badge-pill badge-success">7</small>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar2.html">
                                        <i class=" menu-icon fa fa-fw ti-calendar"></i>
                                        <span>Advanced Calendar</span>
                                        <small class="badge badge-pill badge-success">6</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-gallery"></i>
                                <span>Gallery</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="masonry_gallery.html">
                                        <i class="fa fa-fw ti-gallery"></i> Masonry Gallery
                                    </a>
                                </li>

                                <li>
                                    <a href="dropify.html">
                                        <i class="fa fa-fw ti-dropbox"></i> Dropify
                                    </a>
                                </li>
                                <li>
                                    <a href="image_hover.html">
                                        <i class="fa fa-fw ti-image"></i> Image Hover
                                    </a>
                                </li>
                                <li>
                                    <a href="image_filter.html">
                                        <i class="fa fa-fw ti-filter"></i> Image Filter
                                    </a>
                                </li>
                                <li>
                                    <a href="image_magnifier.html">
                                        <i class="fa fa-fw ti-zoom-in"></i> Image Magnifier
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#"> <i class="menu-icon ti-user"></i> <span>Users</span> <span
                                    class="fa arrow"></span> </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw ti-menu-alt" aria-hidden="true"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href="addnew_user.html">
                                        <i class="fa fa-fw ti-user"></i> Add New User
                                    </a>
                                </li>
                                <li>
                                    <a href="user_profile.html">
                                        <i class="fa fa-fw ti-id-badge"></i> View Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="deleted_users.html">
                                        <i class="fa fa-fw ti-trash"></i> Deleted Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-location-pin"></i>
                                <span>Maps</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="google_maps.html">
                                        <i class="fa fa-fw ti-world"></i> Google Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="vector_maps.html">
                                        <i class="fa fa-fw ti-map"></i> Vector Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="advanced_maps.html">
                                        <i class="fa fa-fw ti-map-alt"></i> Advanced Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="javascript:void(0)">
                                <i class="menu-icon ti-files"></i>
                                <span>Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw ti-shift-right"></i> Login
                                    </a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fa fa-fw ti-check-box"></i> Register
                                    </a>
                                </li>
                                <li>
                                    <a href="forgot_password.html">
                                        <i class="fa fa-fw ti-help"></i> Forgot Password
                                    </a>
                                </li>
                                <li>
                                    <a href="reset_password.html">
                                        <i class="fa fa-fw ti-key"></i> Reset Password
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw ti-lock"></i> Lockscreen
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown active">
                            <a href="javascript:void(0)">
                                <i class="menu-icon ti-face-smile"></i>
                                <span>Extra Pages</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active" id="active">
                                    <a href="blank.html">
                                        <i class="fa fa-fw ti-file"></i> Blank
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        <i class="fa fa-fw ti-layout-cta-left"></i> Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="session_timeout.html">
                                        <i class="fa fa-fw ti-time"></i> Session Timeout
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing_table.html">
                                        <i class="fa fa-fw ti-time"></i> Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <i class="fa fa-fw ti-unlink"></i> 404 Error
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        <i class="fa fa-fw ti-face-sad"></i> 500 Error
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-layout-grid3"></i>
                                <span>Layouts</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="menubarfold.html">
                                        <i class="fa fa-fw ti-layout-menu-v"></i> Menubar Fold
                                    </a>
                                </li>
                                <li>
                                    <a href="horizontal_menu.html">
                                        <i class="fa fa-fw ti-layout-menu-full"></i> Horizontal Menu
                                    </a>
                                </li>
                                <li>
                                    <a href="mini_sidebar.html">
                                        <i class="fa fa-fw ti-control-backward"></i> Mini Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a href="boxed_movable_header.html">
                                        <i class="fa fa-fw ti-layout-grid2"></i> Boxed &amp; Movable Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_movable_header.html">
                                        <i class="fa fa-fw ti-view-list-alt"></i> Movable Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_boxed_fixed_header.html">
                                        <i class="fa fa-fw ti-view-list"></i> Boxed &amp; Fixed Header
                                    </a>
                                </li>
                                <li>
                                    <a href="layout_fixed.html">
                                        <i class="fa fa-fw ti-layout-column2"></i> Fixed Header &amp; Menu
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="menu-icon ti-menu"></i>
                                <span>
                                    Menu levels
                                </span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                            <ul class="sub-menu sub-submenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 3
                                                        <span class="fa arrow"></span>
                                                    </a>
                                                    <ul class="sub-menu sub-submenu">
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level
                                                                4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level
                                                                4
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level
                                                                4
                                                                <span class="fa arrow"></span>
                                                            </a>
                                                            <ul class="sub-menu sub-submenu">
                                                                <li>
                                                                    <a href="#">
                                                                        <i
                                                                            class="fa fa-fw ti-control-skip-forward"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i
                                                                            class="fa fa-fw ti-control-skip-forward"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i
                                                                            class="fa fa-fw ti-control-skip-forward"></i>
                                                                        Level 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 4
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-control-skip-forward"></i> Level 1
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-fw ti-control-skip-forward"></i> Level 2
                                                <span class="fa arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                <h1>Blank</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-fw ti-home"></i> Dashboard
                        </a>
                    </li>
                    <li> Extra Pages</li>
                    <li class="active">
                        <a href="blank.html">Blank</a>
                    </li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">

                <!--rightside bar -->
                <div id="right">
                    <div id="right-slim">
                        <div class="rightsidebar-right">
                            <div class="rightsidebar-right-content">
                                <div class="panel-tabs">
                                    <ul class="nav nav-tabs nav-float" role="tablist">
                                        <li class="nav-item text-center">
                                            <a href="#r_tab1" role="tab" data-toggle="tab"
                                                class="nav-link active "><i class="fa fa-fw ti-comments"></i></a>
                                        </li>
                                        <li class="text-center nav-item">
                                            <a href="#r_tab2" role="tab" data-toggle="tab" class="nav-link"><i
                                                    class="fa fa-fw ti-bell"></i></a>
                                        </li>
                                        <li class="text-center nav-item">
                                            <a href="#r_tab3" role="tab" data-toggle="tab" class="nav-link"><i
                                                    class="fa fa-fw ti-settings"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="r_tab2">
                                        <div id="slim_t2">
                                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                                <i class="fa fa-fw ti-bell"></i>
                                                Notifications
                                            </h5>
                                            <ul class="list-unstyled m-t-15 notifications">
                                                <li>
                                                    <a href="" class="message icon-not striped-col">
                                                        <img class="message-image rounded-circle"
                                                            src="img/authors/avatar3.jpg" alt="avatar-image">

                                                        <div class="message-body">
                                                            <strong>John Doe</strong>
                                                            <br>
                                                            5 members joined today
                                                            <br>
                                                            <small class="noti-date">Just now</small>
                                                        </div>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="message icon-not">
                                                        <img class="message-image rounded-circle"
                                                            src="img/authors/avatar.jpg" alt="avatar-image">
                                                        <div class="message-body">
                                                            <strong>Tony</strong>
                                                            <br>
                                                            likes a photo of you
                                                            <br>
                                                            <small class="noti-date">5 min</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="message icon-not striped-col">
                                                        <img class="message-image rounded-circle"
                                                            src="img/authors/avatar6.jpg" alt="avatar-image">

                                                        <div class="message-body">
                                                            <strong>John</strong>
                                                            <br>
                                                            Dont forgot to call...
                                                            <br>
                                                            <small class="noti-date">11 min</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="message icon-not">
                                                        <img class="message-image rounded-circle"
                                                            src="img/authors/avatar1.jpg" alt="avatar-image">
                                                        <div class="message-body">
                                                            <strong>Jenny Kerry</strong>
                                                            <br>
                                                            Done with it...
                                                            <br>
                                                            <small class="noti-date">1 Hour</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="message icon-not striped-col">
                                                        <img class="message-image rounded-circle"
                                                            src="img/authors/avatar7.jpg" alt="avatar-image">

                                                        <div class="message-body">
                                                            <strong>Ernest Kerry</strong>
                                                            <br>
                                                            2 members joined today
                                                            <br>
                                                            <small class="noti-date">3 Days</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-right noti-footer"><a href="#">View All
                                                        Notifications <i class="ti-arrow-right"></i></a></li>
                                            </ul>
                                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                                <i class="fa fa-fw ti-check-box"></i>
                                                Tasks
                                            </h5>
                                            <ul class="list-unstyled m-t-15">
                                                <li>
                                                    <div>
                                                        <p>
                                                            <span>Button Design</span>
                                                            <small class="float-right text-muted">40%</small>
                                                        </p>
                                                        <div class="progress progress-xs  active">
                                                            <div class="progress-bar bg-success progress-bar-striped"
                                                                role="progressbar" aria-valuenow="40"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 40%">
                                                                <span class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <p>
                                                            <span>Theme Creation</span>
                                                            <small class="float-right text-muted">20%</small>
                                                        </p>
                                                        <div class="progress progress-xs  active">
                                                            <div class="progress-bar bg-info progress-bar-striped"
                                                                role="progressbar" aria-valuenow="20"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 20%">
                                                                <span class="sr-only">20% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <p>
                                                            <span>XYZ Task To Do</span>
                                                            <small class="float-right text-muted">60%</small>
                                                        </p>
                                                        <div class="progress progress-xs  active">
                                                            <div class="progress-bar bg-warning progress-bar-striped"
                                                                role="progressbar" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 60%">
                                                                <span class="sr-only">60% Complete (warning)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <p>
                                                            <span>Transitions Creation</span>
                                                            <small class="float-right text-muted">80%</small>
                                                        </p>
                                                        <div class="progress progress-xs active">
                                                            <div class="progress-bar bg-danger progress-bar-striped"
                                                                role="progressbar" aria-valuenow="80"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 80%">
                                                                <span class="sr-only">80% Complete (danger)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-right"><a href="#">View All Tasks <i
                                                            class="ti-arrow-right"></i></a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="r_tab3">
                                        <div id="slim_t3">

                                            <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                                <i class="fa fa-fw ti-settings"></i>
                                                General
                                            </h5>
                                            <ul class="list-unstyled settings-list m-t-10">
                                                <li>
                                                    <label for="status">Available</label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="status" name="my-checkbox"
                                                            checked>
                                                    </span>
                                                </li>
                                                <li>
                                                    <label for="email-auth">Login with Email</label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="email-auth" name="my-checkbox">
                                                    </span>
                                                </li>
                                                <li>
                                                    <label for="update">Auto Update</label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="update" name="my-checkbox">
                                                    </span>
                                                </li>

                                            </ul>
                                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                                <i class="fa fa-fw ti-volume"></i>
                                                Sound & Notification
                                            </h5>
                                            <ul class="list-unstyled settings-list m-t-10">
                                                <li>
                                                    <label for="chat-sound">Chat Sound</label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="chat-sound" name="my-checkbox"
                                                            checked>
                                                    </span>
                                                </li>
                                                <li>
                                                    <label for="noti-sound">Notification Sound</label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="noti-sound" name="my-checkbox">
                                                    </span>
                                                </li>
                                                <li>
                                                    <label for="remain">Remainder </label>
                                                    <span class="float-right">
                                                        <input type="checkbox" id="remain" name="my-checkbox"
                                                            checked>
                                                    </span>

                                                </li>
                                                <li>
                                                    <label for="vol">Volume</label>
                                                    <input type="range" id="vol" min="0"
                                                        max="100" value="15">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
