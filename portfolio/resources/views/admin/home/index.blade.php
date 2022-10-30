
<!doctype html>
<html class="no-js') }}" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard - {{ isset($home->first_name) ? $home->first_name . " " . $home->last_name : 'LEE'}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>

<body class="skin-dark">

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="index.html">
                            <img src="{{ asset('admin/images/logo/logo.png') }}" alt="">
                            <img src="{{ asset('admin/images/logo/logo-light.png') }}" class="logo-light" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">

                                            <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="text" placeholder="Search Here">
                                                    <button><i class="zmdi zmdi-search"></i></button>
                                                </form>
                                                <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag" src="{{ asset('admin/images/flags/flag-1.jpg') }}" alt=""><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img src="{{ asset('admin/images/flags/flag-1.jpg') }}" alt=""> English</a></li>
                                            <li><a href="#"><img src="{{ asset('admin/images/flags/flag-2.jpg') }}" alt=""> Japanese</a></li>
                                            <li><a href="#"><img src="{{ asset('admin/images/flags/flag-3.jpg') }}" alt=""> Spanish </a></li>
                                            <li><a href="#"><img src="{{ asset('admin/images/flags/flag-4.jpg') }}" alt=""> Germany</a></li>
                                        </ul>

                                    </li>

                                    <!--Mail-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-email-open"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-mail">
                                            <div class="head">
                                                <h4 class="title">You have 3 new mail.</h4>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="{{ asset('admin/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: New Account</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="{{ asset('admin/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="{{ asset('admin/images/avatar/avatar-2.jpg') }}" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Product inquiry</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="image"><img src="{{ asset('admin/images/avatar/avatar-1.jpg') }}" alt=""></div>
                                                            <div class="content">
                                                                <h6>Sub: Mail Support</h6>
                                                                <p>There are many variations of passages of Lorem Ipsum available. </p>
                                                            </div>
                                                            <span class="reply"><i class="zmdi zmdi-mail-reply"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                    <!--Notification-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span class="badge"></span></a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                            <div class="head">
                                                <h5 class="title">You have 4 new notification.</h5>
                                            </div>
                                            <div class="body custom-scroll">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-notifications-none"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-block"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-info-outline"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="zmdi zmdi-shield-security"></i>
                                                            <p>There are many variations of pages available.</p>
                                                            <span>11.00 am   Today</span>
                                                        </a>
                                                        <button class="delete"><i class="zmdi zmdi-close-circle-o"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer">
                                                <a href="#" class="view-all">view all</a>
                                            </div>
                                        </div>

                                    </li>

                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="{{ asset('admin/images/avatar/avatar-1.jpg') }}" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">Madison Howard</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">Madison Howard</a></h5>
                                                <a class="mail" href="#">mailnam@mail.com</a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li class="has-sub-menu"><a href="#"><i class="ti-home"></i> <span>Dashboard</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="index.html"><span>E-commerce (Default)</span></a></li>
                            </ul>
                        </li>

                        <li><a href="widgets.html"><i class="ti-palette"></i> <span>Widgets</span></a></li>

                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Home</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="home.html"><span>Home</span></a></li>

                            </ul>
                        </li>

                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Home</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="about.html"><span>About</span></a></li>

                            </ul>
                        </li>


                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->


        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Home <span>/ Personal Info</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">
                <div class="box">

                    <div class="box-body">
                        <form action="{{ route('admin.home.submit') }}" method="post">
                            @csrf
                            <div class="row mbn-20">

                                <div class="col-6 mb-20">
                                    <label for="formLayoutUsername4">First Name</label>
                                    <input type="text" id="formLayoutUsername4" name="first_name" class="form-control" value="{{ isset($home->first_name) ? $home->first_name : 'Enter Your First Name' }}" placeholder="First Name">
                                    @error('first_name')
                                        <div class="alert alert-outline-secondary" role="alert">
                                            <i class="zmdi zmdi-info"></i><strong class="alert-link">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-20">
                                    <label for="formLayoutUsername4">Last Name</label>
                                    <input type="text" id="formLayoutUsername4" name="last_name" class="form-control" value="{{ isset($home->last_name) ? $home->last_name : 'Enter Your Last Name' }}" placeholder="Last Name">
                                    @error('last_name')
                                        <div class="alert alert-outline-secondary" role="alert">
                                            <i class="zmdi zmdi-info"></i><strong class="alert-link">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-20">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($home->title) ? $home->title : 'Enter Your Title' }}" placeholder="Title">
                                    @error('title')
                                        <div class="alert alert-outline-secondary" role="alert">
                                            <i class="zmdi zmdi-info"></i><strong class="alert-link">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-20">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ isset($home->email) ? $home->email : 'Enter Your Email' }}" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-outline-secondary" role="alert">
                                            <i class="zmdi zmdi-info"></i><strong class="alert-link">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-20">
                                    <label for="phone">Phone Number</label>
                                    <input type="phone" id="phone" name="phone" class="form-control" value="{{ isset($home->phone) ? $home->phone : 'Enter Your Phone Number' }}" placeholder="Phone Number">
                                    @error('phone')
                                        <div class="alert alert-outline-secondary" role="alert">
                                            <i class="zmdi zmdi-info"></i><strong class="alert-link">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-20">
                                    <input type="submit" value="submit" class="button button-primary">
                                    <input type="submit" value="cancle" class="button button-danger">
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('admin/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/tippy4.min.js.js') }}"></script>
    <!--Main JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
