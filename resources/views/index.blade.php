<!DOCTYPE html>
<html>
    <head>
        <title>Wizard</title>
        <link href="css/application.min.css" rel="stylesheet">
        <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
        <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Sing App - Bootstrap 4 Admin Dashboard Template">
        <meta name="keywords" content="bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
        <meta name="author" content="Flatlogic LLC">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script>
            /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
            chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
            https://code.google.com/p/chromium/issues/detail?id=332189
            */
        </script>
    </head>
    <body class="">
        <!--
          Main sidebar seen on the left. may be static or collapsing depending on selected state.
        
            * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
            * Static - stays always open.
        -->
        <nav id="sidebar" class="sidebar" role="navigation">
            <!-- need this .js class to initiate slimscroll -->
            <div class="js-sidebar-content">
                <header class="logo d-none d-md-block">
                    <a href="https://demo.flatlogic.com/sing-app/"><span>Wizard</span> app</a>
                </header>
                <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
                     looks good, so adding it and enhancing with notifications -->
                <div class="sidebar-status d-md-none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar float-right">
                            <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                        <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                             should be used with bg-* and text-* classes for colors -->
                        <span class="circle bg-warning fw-bold text-gray-dark">
                            13
                        </span>
                        &nbsp;
                        Mohamed <strong>Eways</strong>
                        <b class="caret"></b>
                    </a>
                    <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
                </div>
                <!-- main notification links are placed inside of .sidebar-nav -->
                <ul class="sidebar-nav">
                    <li class=" active ">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="index.html">
                            <span class="icon">
                                <i class="fi flaticon-home"></i>
                            </span>
                            Dashboard
                        </a>
                    </li>
                </ul>
                <!-- every .sidebar-nav may have a title -->
                <h5 class="sidebar-nav-title">Learning <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
                <ul class="sidebar-nav">
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="courses.html">
                            <span class="icon">
                                <i class="fi flaticon-controls"></i>
                            </span>
                            Courses
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="tables.html">
                            <span class="icon">
                                <i class="fi flaticon-equal-1"></i>
                            </span>
                            Centers
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="notifications.html">
                            <span class="icon">
                                <i class="fi flaticon-alarm"></i>
                            </span>
                            educational org
                        </a>
                    </li>
<!--                    <li class="">-->
<!--                        <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">-->
<!--                            <span class="icon">-->
<!--                                <i class="fi flaticon-layers"></i>-->
<!--                            </span>-->
<!--                            UI Elements-->
<!--                            <i class="toggle fa fa-angle-down"></i>-->
<!--                        </a>-->
<!--                        <ul id="sidebar-ui" class="collapse ">-->
<!--                            <li class=""><a href="icons.html">Icons</a></li>-->
<!--                            <li class=""><a href="charts.html">Charts</a></li>-->
<!--                            <li class=""><a href="maps_google.html">Google Maps</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
                <h5 class="sidebar-nav-title">Careers <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
                <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
<!--                <ul class="sidebar-labels">-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            &lt;!&ndash; yep, .circle again &ndash;&gt;-->
<!--                            <i class="fa fa-circle text-danger mr-xs"></i>-->
<!--                            <span class="label-name">My Recent</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-circle text-primary mr-xs"></i>-->
<!--                            <span class="label-name">Starred</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <i class="fa fa-circle mr-xs"></i>-->
<!--                            <span class="label-name">Background</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
                <h5 class="sidebar-nav-title">Chat Room</h5>
                <!-- A place for sidebar notifications & alerts -->

            </div>
        </nav>            <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
            <nav class="page-controls navbar navbar-dashboard">
                 
                <div class="container-fluid">
                    <!-- .navbar-header contains links seen on xs & sm screens -->
                    <div class="navbar-header mr-md-3">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                                <a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
                                    <i class="la la-bars"></i>
                                </a>
                                <!-- shown on xs & sm screen. collapses and expands navigation -->
            
                                <a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#">
                                    <span class="square square-lg d-md-none"><i class="la la-bars"></i></span>
                                    <i class="la la-bars d-none d-md-block"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-refresh"></i></a></li>
                            <li class="nav-item ml-n-xs d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-times"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right d-md-none">
                            <li class="nav-item">
                                <!-- toggles chat -->
                                <a class="nav-link" href="#" data-toggle="chat-sidebar">
                                    <span class="square square-lg"><i class="la la-globe"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- xs & sm screen logo -->
                        <a class="navbar-brand d-md-none" href="../dashboard/index.html">
                            <i class="fa fa-circle text-gray mr-n-sm"></i>
                            <i class="fa fa-circle text-warning"></i>
                            &nbsp;
                            sing
                            &nbsp;
                            <i class="fa fa-circle text-warning mr-n-sm"></i>
                            <i class="fa fa-circle text-gray"></i>
                        </a>
                    </div>
            
                    <!-- this part is hidden for xs screens -->
                    <div class="navbar-header mobile-hidden">
                        <!-- search form! link it to your search server -->
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <div class="input-group input-group-no-border ml-4">
                                    <input class="form-control" id="main-search" type="text" placeholder="Search Dashboard">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown nav-item">
                                <a
                                        href="#"
                                        role="button"
                                        class="dropdown-toggle dropdown-toggle-notifications nav-link"
                                        id="notifications-dropdown-toggle"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-position="bottom-middle-aligned"
                                        data-disable-interaction="false"
                                >
                                    <span class="thumb-sm avatar float-left">
                                        <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="..." >
                                    </span>
                                    &nbsp;
                                    Mohamed <strong> Eways
                                </strong>&nbsp;
                                    <span class="circle bg-primary fw-bold text-white">
                                        15
                                    </span>
                                </a>
                                <div
                                        class="dropdown-menu dropdown-menu-right animated fadeInUp py-0"
                                        aria-labelledby="notifications-dropdown-toggle"
                                        id="notifications-dropdown-menu"
                                >
                                    <section class="card notifications">
                                        <header class="card-header">
                                            <div class="text-center mb-sm">
                                                <strong>You have 13 notifications</strong>
                                            </div>
                                            <div class="btn-group btn-group-sm btn-group-toggle" id="notifications-toggle" data-toggle="buttons">
                                                <label class="btn btn-default active">
                                                    <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
                                                         only requirement for async reloading -->
                                                    <input type="radio" checked
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/notifications.html"
                                                           data-ajax-target="#notifications-list"> Notifications
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio"
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/messages.html"
                                                           data-ajax-target="#notifications-list"> Messages
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio"
                                                           data-ajax-trigger="change"
                                                           data-ajax-load="../demo/ajax/progress.html"
                                                           data-ajax-target="#notifications-list"> Progress
                                                </label>
                                            </div>
                                        </header>
                                        <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
                                        <div id="notifications-list" class="list-group thin-scroll">
                                            <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a3.jpg" alt="...">
                                            </span>
                                                <p class="no-margin overflow-hidden">
                                                    1 new user just signed up! Check out
                                                    <a href="#">Monica Smith</a>'s account.
                                                    <time class="help-block no-margin">
                                                        2 mins ago
                                                    </time>
                                                </p>
                                            </div>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="glyphicon glyphicon-upload fa-lg"></i>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    2.1.0-pre-alpha just released. </p>
                                                <time class="help-block no-margin">
                                                    5h ago
                                                </time>
                                            </a>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <i class="fa fa-bolt fa-lg"></i>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    Server load limited. </p>
                                                <time class="help-block no-margin">
                                                    7h ago
                                                </time>
                                            </a>
                                            <div class="list-group-item">
                                            <span class="thumb-sm float-left mr clearfix">
                                                <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                                            </span>
                                                <p class="no-margin overflow-hidden">
                                                    User <a href="#">Jeff</a> registered
                                                    &nbsp;&nbsp;
                                                    <button class="btn btn-xs btn-success">Allow</button>
                                                    <button class="btn btn-xs btn-danger">Deny</button>
                                                    <time class="help-block no-margin">
                                                        12:18 AM
                                                    </time>
                                                </p>
                                            </div>
                                            <div class="list-group-item">
                                                <span class="thumb-sm float-left mr">
                                                    <i class="fa fa-shield fa-lg"></i>
                                                </span>
                                                <p class="no-margin overflow-hidden">
                                                    Instructions for changing your Envato Account password. Please
                                                    check your account <a href="#">security page</a>.
                                                    <time class="help-block no-margin">
                                                        12:18 AM
                                                    </time>
                                                </p>
                                            </div>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="square bg-primary square-lg">
                                                    <i class="fa fa-facebook text-white"></i>
                                                </span>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    New <strong>76</strong> facebook likes received.</p>
                                                <time class="help-block no-margin">
                                                    15 Apr 2014
                                                </time>
                                            </a>
                                            <a class="list-group-item" href="#">
                                            <span class="thumb-sm float-left mr">
                                                <span class="circle circle-lg bg-gray-dark">
                                                    <i class="fa fa-circle-o text-white"></i>
                                                </span>
                                            </span>
                                                <p class="text-ellipsis no-margin">
                                                    Dark matter detected.</p>
                                                <time class="help-block no-margin">
                                                    15 Apr 2014
                                                </time>
                                            </a>
                                        </div>
                                        <footer class="card-footer text-sm">
                                            <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                                                 when clicked -->
                                            <button class="btn-label btn-link float-right"
                                                    id="load-notifications-btn"
                                                    data-ajax-load="demo/ajax/notifications.php"
                                                    data-ajax-target="#notifications-list"
                                                    data-loading-text="<i class='la la-refresh fa-spin mr-xs'></i> Loading...">
                                                <i class="la la-refresh"></i>
                                            </button>
                                            <span class="card-footer-text">Synced at: 21 Apr 2014 18:36</span>
                                        </footer>
                                    </section>
                                </div>
                            </li>
                            <li class="dropdown nav-item" >
                                <a href="#" class="dropdown-toggle no-caret nav-link" data-toggle="dropdown">
                                    <i class="la la-cog"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Calendar</a></li>
                                    <li><a class="dropdown-item" href="#">Inbox &nbsp;&nbsp;<span class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><i class="la la-sign-out"></i> &nbsp; Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div class="theme-helper">
                <section class="widget theme-helper-content">
                    <header class="theme-helper-header d-flex p-0">
                        <div class="theme-helper-toggler">
                            <div class="theme-helper-spinner bg-primary text-white">
                                <i class="la la-cog"></i>
                                <i class="la la-cog fs-smaller"></i>
                            </div>
                        </div>
                        <h6>Configuration</h6>
                    </header>
                    <div class="widget-body mt-3">
                        <div class="mt-4">
                            <a href="https://flatlogic.com/dashboards/sing-app-html5"
                               target="_blank"
                               role="button"
                               class="btn btn-warning btn-rounded-f btn-block fs-mini text-white">
                                Purchase
                            </a>
                            <a href="https://flatlogic.com/templates/sing-app-html5"
                               target="_blank"
                               role="button"
                               class="btn btn-danger btn-rounded-f btn-block fs-mini">
                                Go FULL Version
                            </a>
                            <a href="http://demo.flatlogic.com/sing-app/documentation/"
                               target="_blank"
                               role="button"
                               class="btn btn-secondary btn-rounded-f btn-block fs-mini">
                                Documentation
                            </a>
                        </div>
                        <div class="d-flex justify-content-between mt-lg">
                            <a role="button"
                               target="_blank"
                               href="https://flatlogic.com/contact"
                               class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                                <i class="glyphicon glyphicon-headphones mr-xs"></i>
                                Support
                            </a>
                            <a role="button"
                               target="_blank"
                               href="https://github.com/flatlogic/sing-app"
                               class="btn btn-outline-default btn-rounded-f fs-mini text-muted">
                                <i class="fa fa-github mr-xs"></i>
                                Github
                            </a>
                        </div>
                        <div class="mt-lg d-flex flex-column align-items-center theme-sharing">
                            <span class="fs-sm">
                                Thank you for sharing!
                            </span>
                            <div class="d-flex justify-content-center text-light mt-2">
                                <a target="_blank"
                                   href="https://twitter.com/intent/tweet?text=Admin%20dashboard%20template%20built%20with%20NodeJS,%20React%20and%20Bootstrap%204!&url=https://demo.flatlogic.com/sing-app/html-bs4/&via=flatlogic">
                                    <i class="fa fa-twitter pr-1"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://demo.flatlogic.com/sing-app/html-bs4/"
                                   target="_blank">
                                    <i class="fa fa-facebook pl-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        <div class="content-wrap">
            <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
            <main id="content" class="content" role="main">
                <!-- Page content -->

        <div class="analytics">
            <div class="analytics-side">
                <div class="row">
                    <div class="col-xl-9 col-md-6 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                               slider
                            </section>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                                <header>
                                    <h5>Revenue Breakdown</h5>
                                    <div class="widget-controls">
                                        <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a>
                                    </div>
                                </header>
                                <div class="widget-body">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6 col-xs-12" data-toggle="tooltip" data-placement="top"
                                             title="Orders since last refresh" id="flot-donut" style="height: 100px;"></div>
                                        <div class="col-lg-4 col-md-5 display-flex flex-column justify-content-center"
                                             id="flot-donut-legend"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-xlg">
                        <section class="widget mb-0 h-100">
                            <header>
                                <h5>App Performance</h5>
                                <div class="widget-controls">
                                    <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a>
                                </div>
                            </header>
                            <div class="widget-body">
                                <p class="text-muted d-flex flex-wrap">
                                    <small class="mr-lg d-flex align-items-center" data-toggle="tooltip"
                                           data-placement="top" title="Year 2019">
                                        <span class="circle bg-danger text-danger mr-xs" style="font-size: 4px;"></span>
                                        This Period
                                    </small>
                                    <small class="mr-lg d-flex align-items-center" data-toggle="tooltip"
                                           data-placement="top" title="Year 2019">
                                        <span class="circle bg-primary text-primary mr-xs" style="font-size: 4px;"></span>
                                        Last Period
                                    </small>
                                </p>
                                <h6>SDK</h6>
                                <div class="progress progress-xs mb-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;"
                                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;"
                                         aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="mt-sm">Integration</h6>
                                <div class="progress progress-xs mb-xs">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%;"
                                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"
                                         aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                                <header>
                                    <h5>Server Overview</h5>
                                    <div class="widget-controls">
                                        <a data-widgster="close" title="Close" href="#"><i class="la la-remove"></i></a>
                                    </div>
                                </header>

                                <div class="widget-body">
                                    <div class="d-flex align-items-center mb-sm">
                                        <p class="width-150" data-toggle="tooltip" data-placement="top" title="" data-original-title="+23% vs last period"><small>60% / 37°С / 3.3 Ghz</small></p>
                                        <div class="sparkline-wrapper" style="width: calc(100% - 150px);">
                                            <div id="sparkline"><canvas width="160" height="20" style="display: inline-block; width: 160px; height: 20px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-sm">
                                        <p class="width-150" data-toggle="tooltip" data-placement="top" title="" data-original-title="+30% vs last period"><small>54% / 31°С / 3.3 Ghz</small></p>
                                        <div class="sparkline-wrapper" style="width: calc(100% - 150px);">
                                            <div id="sparkline-1"><canvas width="160" height="20" style="display: inline-block; width: 160px; height: 20px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-sm">
                                        <p class="width-150" data-toggle="tooltip" data-placement="top" title="" data-original-title="+21% vs last period"><small>57% / 21°С / 3.3 Ghz</small></p>
                                        <div class="sparkline-wrapper" style="width: calc(100% - 150px);">
                                            <div id="sparkline-2"><canvas width="160" height="20" style="display: inline-block; width: 160px; height: 20px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                                <header class="d-flex justify-content-between flex-wrap">
                                    <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                        <span class="circle bg-primary mr-sm" style="font-size: 6px;"></span>
                                        Statistic <span class="fw-normal ml-xs">Light Blue</span>
                                    </h4>
                                    <select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
                                            id="simple-select">
                                        <option class="dropdown-item" value="1">Weekly</option>
                                        <option class="dropdown-item" value="2">Daily</option>
                                        <option class="dropdown-item" value="3">Monthly</option>
                                    </select>
                                </header>
                                <div class="widget-body p-0">
                                    <h4 class="fw-semi-bold ml-lg mb-lg">4,232</h4>
                                    <div class="d-flex border-top">
                                        <div class="w-50 border-right p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>+830</h6>
                                                <i class="la la-arrow-right la-lg text-primary rotate-315"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Registrations</small></p>
                                        </div>
                                        <div class="w-50 p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>4.5%</h6>
                                                <i class="la la-arrow-right la-lg text-danger rotate-45"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                                <header class="d-flex justify-content-between flex-wrap">
                                    <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                        <span class="circle bg-danger mr-sm" style="font-size: 6px;"></span>
                                        Statistic <span class="fw-normal ml-xs">Sing App</span>
                                    </h4>
                                    <select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
                                            id="simple-select">
                                        <option class="dropdown-item" value="1">Weekly</option>
                                        <option class="dropdown-item" value="2">Daily</option>
                                        <option class="dropdown-item" value="3">Monthly</option>
                                    </select>
                                </header>
                                <div class="widget-body p-0">
                                    <h4 class="fw-semi-bold ml-lg mb-lg">754</h4>
                                    <div class="d-flex border-top">
                                        <div class="w-50 border-right p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>+30</h6>
                                                <i class="la la-arrow-right la-lg text-primary rotate-315"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Registrations</small></p>
                                        </div>
                                        <div class="w-50 p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>2.5%</h6>
                                                <i class="la la-arrow-right la-lg text-primary rotate-315"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-xl-4 mb-xlg">
                        <div class="pb-xlg h-100">
                            <section class="widget mb-0 h-100">
                                <header class="d-flex justify-content-between flex-wrap">
                                    <h4 class="d-flex align-items-center pb-1 big-stat-title">
                                        <span class="circle bg-info mr-sm" style="font-size: 6px;"></span>
                                        Statistic <span class="fw-normal ml-xs">RNS</span>
                                    </h4>
                                    <select class="selectpicker" data-style="btn-default" data-width="auto" tabindex="-1"
                                            id="simple-select">
                                        <option class="dropdown-item" value="1">Weekly</option>
                                        <option class="dropdown-item" value="2">Daily</option>
                                        <option class="dropdown-item" value="3">Monthly</option>
                                    </select>
                                </header>
                                <div class="widget-body p-0">
                                    <h4 class="fw-semi-bold ml-lg mb-lg">1,025</h4>
                                    <div class="d-flex border-top">
                                        <div class="w-50 border-right p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>+230</h6>
                                                <i class="la la-arrow-right la-lg text-primary rotate-315"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Registrations</small></p>
                                        </div>
                                        <div class="w-50 p-3 px-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>21.5%</h6>
                                                <i class="la la-arrow-right la-lg text-danger rotate-45"></i>
                                            </div>
                                            <p class="text-muted mb-0 mr"><small>Bounce Rate</small></p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-12 mb-lg">
                        <section class="widget pb-0">
                            <header>
                                <h4>
                                    Support <strong>Requests</strong>
                                </h4>
                                <div class="widget-controls">
                                    <a href="#"><i class="la la-cog"></i></a>
                                    <a href="#" data-widgster="close"><i class="la la-remove"></i></a>
                                </div>
                            </header>
                            <div class="widget-body p-0 support table-wrapper">
                                <table class="table table-striped mb-0">
                                    <thead>
                                    <tr class="text-muted">
                                        <th scope="col"><span class=" pl-3">NAME</span></th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">PRODUCT</th>
                                        <th scope="col">PRICE</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">CITY</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                    <tr>
                                        <th class="pl-4 fw-normal">Mark Otto</th>
                                        <td>ottoto@wxample.com</td>
                                        <td>ON the Road</td>
                                        <td>$25 224.2</td>
                                        <td>11 May 2017</td>
                                        <td>Otsego</td>
                                        <td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
                                    </tr>
                                    <tr>
                                        <th class="pl-4">Jacob Thornton</th>
                                        <td>thornton@wxample.com</td>
                                        <td>HP Core i7</td>
                                        <td>$1 254.2</td>
                                        <td>4 Jun 2017</td>
                                        <td>Fivepointville</td>
                                        <td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
                                    </tr>
                                    <tr>
                                        <th class="pl-4">Larry the Bird</th>
                                        <td>bird@wxample.com</td>
                                        <td>Air Pro</td>
                                        <td>$1 570.0</td>
                                        <td>27 Aug 2017</td>
                                        <td>Leadville North</td>
                                        <td><button class="btn btn-xs p-1 px-3 btn-success">Pending</button></td>
                                    </tr>
                                    <tr>
                                        <th class="pl-4">Joseph May</th>
                                        <td>josephmay@wxample.com</td>
                                        <td>Version Control</td>
                                        <td>$5 224.5</td>
                                        <td>19 Feb 2018</td>
                                        <td>Seaforth</td>
                                        <td><button class="btn btn-xs p-1 px-3 btn-danger">Declined</button></td>
                                    </tr>
                                    <tr>
                                        <th class="pl-4">Peter Horadnia</th>
                                        <td>horadnia@wxample.com</td>
                                        <td>Let's Dance</td>
                                        <td>$43 594.7</td>
                                        <td>1 Mar 2018</td>
                                        <td>Hanoverton</td>
                                        <td><button class="btn btn-xs p-1 px-3 btn-info">Sent</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="analytics-side">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
                        <section class="widget mb-xlg">
                            <div class="widget-body p-0">
                                <div id="events-calendar"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
                        <section class="widget pb-2 mb-xlg">
                            <header>
                                <h4>Today's Tasks <span
                                        class="badge badge-pill badge-primary fw-normal pull-right mt-xs">11</span></h4>
                                <p class="text-primary mb-0"><small class="tasks-stat"></small></p>
                            </header>
                            <div class="widget-body task-container">
                                <div class="task d-flex align-items-start">
                                    <div class="form-check abc-checkbox abc-checkbox-success d-flex">
                                        <input class="form-check-input" id="checkbox1" type="checkbox">
                                        <label class="form-check-label" for="checkbox1"></label>
                                    </div>
                                    <div class="task-content">
                                        <p class="text-muted mb-xs"><small>Meeting</small></p>
                                        <h6>Meeting with Andrew Piker</h6>
                                        <p class="text-muted"><small>9:00</small></p>
                                    </div>
                                </div>
                                <div class="task d-flex align-items-start">
                                    <div class="form-check abc-checkbox abc-checkbox-success d-flex">
                                        <input class="form-check-input" id="checkbox2" type="checkbox">
                                        <label class="form-check-label" for="checkbox2"></label>
                                    </div>
                                    <div class="task-content">
                                        <p class="text-muted mb-xs"><small>Call</small></p>
                                        <h6>Call with HT Company</h6>
                                        <p class="text-muted"><small>12:00</small></p>
                                    </div>
                                </div>
                                <div class="task d-flex align-items-start">
                                    <div class="form-check abc-checkbox abc-checkbox-success d-flex">
                                        <input class="form-check-input" id="checkbox3" type="checkbox">
                                        <label class="form-check-label" for="checkbox3"></label>
                                    </div>
                                    <div class="task-content">
                                        <p class="text-muted mb-xs"><small>Meeting</small></p>
                                        <h6>Meeting with Zoe Alison</h6>
                                        <p class="text-muted"><small>14:00</small></p>
                                    </div>
                                </div>
                                <div class="task d-flex align-items-start">
                                    <div class="form-check abc-checkbox abc-checkbox-success d-flex">
                                        <input class="form-check-input" id="checkbox4" type="checkbox">
                                        <label class="form-check-label" for="checkbox4"></label>
                                    </div>
                                    <div class="task-content">
                                        <p class="text-muted mb-xs"><small>Interview</small></p>
                                        <h6>Interview with HR</h6>
                                        <p class="text-muted"><small>15:00</small></p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-transparent w-100 text-center text-muted" role="button">See All <i
                                    class="la la-arrow-down"></i></a>
                        </section>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-12 last-side-element">
                        <section class="widget">
                            <header>
                                <h4>Notifications <span
                                        class="badge badge-pill badge-primary fw-normal pull-right mt-xs">6</span></h4>
                            </header>
                            <div class="widget-body w-100 notifications">
                                <div class="d-flex align-items-start">
                                    <i class="la la-thumbs-up mr text-info"></i>
                                    <p>Ken <span class="fw-semi-bold">accepts</span> your invitation</p>
                                </div>
                                <div class="d-flex w-100">
                                    <i class="la la-file mr text-info"></i>
                                    <p>Report from LT Company</p>
                                </div>
                                <div class="d-flex w-100">
                                    <i class="la la-envelope mr text-info"></i>
                                    <p>4 <span class="fw-semi-bold">Private</span> Mails</p>
                                </div>
                                <div class="d-flex w-100">
                                    <i class="la la-comment mr text-info"></i>
                                    <p>3 <span class="fw-semi-bold">Comments</span> to your Post</p>
                                </div>
                                <div class="d-flex w-100">
                                    <i class="la la-cog mr text-info"></i>
                                    <p>New <span class="fw-semi-bold">Version</span> of RNS app</p>
                                </div>
                                <div class="d-flex w-100">
                                    <i class="la la-bell mr text-info"></i>
                                    <p>15 <span class="fw-semi-bold">Notifications</span> from Social Apps</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
                    <footer class="content-footer">
                        Sing HTML5 Version - Made by <a href="https://flatlogic.com" rel="nofollow" target="_blank">Flatlogic</a>
                    </footer>
            </main>
        </div>
        <!-- The Loader. Is shown when pjax happens -->
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin-fast"></i>
        </div>

        <!-- common libraries. required for every page-->
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../node_modules/bootstrap/js/dist/util.js"></script>
        <script src="../node_modules/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../node_modules/widgster/widgster.js"></script>
        <script src="../node_modules/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
        <script src="../node_modules/hammerjs/hammer.js"></script>
        <script src="../node_modules/jquery-hammerjs/jquery.hammer.js"></script>


        <!-- common app js -->
        <script src="js/settings.js"></script>
        <script src="js/app.js"></script>

        <!-- Page scripts -->
        <script src="../node_modules/flot.animator/jquery.flot.animator.min.js"></script>
        <script src="../node_modules/flot/jquery.flot.js"></script>
        <script src="../node_modules/flot-orderBars/js/jquery.flot.orderBars.js"></script>
        <script src="../node_modules/flot/jquery.flot.selection.js"></script>
        <script src="../node_modules/flot/jquery.flot.time.js"></script>
        <script src="../node_modules/flot/jquery.flot.pie.js"></script>
        <script src="../node_modules/flot/jquery.flot.stack.js"></script>
        <script src="../node_modules/flot/jquery.flot.crosshair.js"></script>
        <script src="../node_modules/flot/jquery.flot.symbol.js"></script>
        <script src="../node_modules/flot.dashes/jquery.flot.dashes.js"></script>
        <script src="../node_modules/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="../node_modules/bootstrap_calendar/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>
        <script src="../node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- page specific js -->
        <script src="js/index.js"></script>
    </body>
</html>