<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>MalekBD - @yield('title','Admin')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <!-- icons CSS -->
    <link href="{{asset('/assets/scss/icons/font-awesome-pro/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/scss/icons/et-lineicons/css/et-lineicons.css')}}" rel="stylesheet">
    @yield('HeaderJs','')
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <style>
        .sidebar-nav>ul>li>a.active {
            background: #dde8ff54;
        }
        .row-selected {
            background-color: #1976d240 !important;
        }
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox animated slideInUp" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="user-img"> <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="user-img"> <img src="{{asset('assets/images/users/2.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="user-img"> <img src="{{asset('assets/images/users/3.jpg')}}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="index.html#">
                                                <div class="user-img"> <img src="{{asset('assets/images/users/4.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-bd"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-us"></i> USA</a> <a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="index.html#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('assets/images/basic/no_profile_picture.png') }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('assets/images/basic/no_profile_picture.png') }}"  alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4>{{Auth::user()->name}}</h4>
                                                <p class="text-muted">{{Auth::user()->email}}</p><a href="{{route('profile.edit')}}" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{route('profile.edit')}}"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="{{route('users.all')}}"><i class="mdi mdi-account-multiple"></i> All Users</a></li>
                                    <li><a href="index.html#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="index.html#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <form id="call-logout" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('call-logout').submit();">
                                            <i class="fa fa-power-off"></i>
                                            {{ __('Log Out') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('assets/images/basic/no_profile_picture.png') }}" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->

                    <div class="profile-text">
                        <h5 class="mb-0">{{Auth::user()->name}}</h5>
                        <small class="d-block mb-2">{{Auth::user()->role->name}} of AdminPress</small>
                        <a href="/" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <a href="#" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('call-logout').submit();" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                        <div class="dropdown-menu animated flipInY">
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="index.html#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <!-- text-->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('call-logout').submit();"><i class="fa fa-power-off"></i> {{ __('Log Out') }}</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{route('dashboard')}}">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="hide-menu">Inbox <span class="label label-rouded label-themecolor pull-right">4</span></span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="index.html#" aria-expanded="false">
                                <i class="fa fa-bar-chart-o"></i>
                                <span class="hide-menu">Analytics</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.html">Mailbox</a></li>
                                <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                <li><a href="app-compose.html">Compose Mail</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
           
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">@yield('title','Admin')</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        @yield('breadcrumb','')
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                        <i class="ti-settings text-white"></i>
                    </button>
                </div>
            </div>            
            
            <div class="container-fluid">

                @hasSection('content')
                    @yield('content')
                @else
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center p-5 m-0">No Content Found.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/1.jpg')}}" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/2.jpg')}}" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/3.jpg')}}" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/4.jpg')}}" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/5.jpg')}}" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/6.jpg')}}" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/7.jpg')}}" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="{{asset('assets/images/users/8.jpg')}}" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> © <span id="footerCurrentYear"></span> All rights reserved by <a href="https://malekbd.com/" target="_blank">MalekBD.com</a></footer>
        </div>
    </div>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <!--sparkline JavaScript -->
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    
    <script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    
    <!-- Sweet-Alert  -->
    <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    @if(session('success'))
        <script>
            $.toast({
                heading: 'Success',
                text: @json(session('success')),
                position: 'top-right',
                loaderBg: '#24b4ad',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            $.toast({
                heading: 'Error',
                text: @json(session('error')),
                position: 'top-right',
                loaderBg: '#c0322f',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
        </script>
    @endif

    @if($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                $.toast({
                    heading: 'Something is wrong',
                    text: @json($error),
                    position: 'top-right',
                    loaderBg: '#c0322f',
                    icon: 'error',
                    hideAfter: 3000, 
                    stack: 6
                });
            @endforeach
        </script>
    @endif


    @yield('footerJs','')

    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script>
        // Using jQuery
        $(document).ready(function () {
            const currentYear = new Date().getFullYear();
            $('#footerCurrentYear').text(currentYear);
        });
    </script>
</body>

</html>