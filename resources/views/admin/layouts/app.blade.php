<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="dashboard">
    <meta name="keywords" content="dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{asset('backend/assets/images/')}}/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/assets/images/')}}/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/')}}/style.css">
    <!-- END: Custom CSS-->
     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/vendors.min.css">
     <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/')}}/css/tables/datatable/datatables.min.css">
    @yield('css')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        {{-- <ul class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul> --}}
                        {{-- <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore dashboard..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                                <!-- select.bookmark-select-->
                                <!--   option Chat-->
                                <!--   option email-->
                                <!--   option todo-->
                                <!--   option Calendar-->
                            </li>
                        </ul> --}}
                    </div>
                    <ul class="nav navbar-nav float-right">
                        {{-- <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore dashboard..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a>

                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{Auth::user()->name}}</span>
                                    <span class="user-status">Available</span>
                                </div>
                                <span>
                                    <img class="round" src="{{asset('backend/assets/images/')}}/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                {{-- <a class="dropdown-item" href="page-user-profile.html">
                                    <i class="feather icon-user"></i> Edit Profile
                                </a> --}}
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('logout')}}"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('admin.layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{date('Y')}}
                <a class="text-bold-800 grey darken-2"
                href="#" target="_blank">MIV,</a>All rights Reserved</span>
        </p>
    </footer>
    <!-- END: Footer-->

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('backend/assets/vendors/')}}/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/assets/vendors/')}}/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/extensions/tether.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/assets/js/')}}/core/app-menu.js"></script>
    <script src="{{asset('backend/assets/js/')}}/core/app.js"></script>
    <script src="{{asset('backend/assets/js/')}}/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/assets/js/')}}/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{asset('backend/assets/vendors/')}}/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
    {!! Toastr::message() !!}
    <!-- BEGIN: Page JS-->
    {{-- <script src="{{asset('backend/assets/js/')}}/scripts/datatables/datatable.js"></script> --}}
    <!-- END: Page JS-->
    @include('admin.layouts.js_script')

    @yield('script')
    

</body>
<!-- END: Body-->

</html>
