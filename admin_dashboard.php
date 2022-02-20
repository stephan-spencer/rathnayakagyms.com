<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <?php include 'panel_header.php'?>
</head>

<body>
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Color</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form full-width">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="ion-ios-search-strong"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle icon">
                        <i class="ion-ios-bell"></i>
                        <span class="label">5</span>
                    </a>
                    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                        <li class="dropdown-header">Notifications (5)</li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="ion-ios-close-empty media-object bg-red"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading">Server Error Reports</h6>
                                    <div class="text-muted f-s-11">3 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="images/trainer-6.jpg" class="media-object" alt="" /></div>
                                <div class="media-body">
                                    <h6 class="media-heading">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">25 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="images/trainer-4.jpg" class="media-object" alt="" /></div>
                                <div class="media-body">
                                    <h6 class="media-heading">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">35 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="ion-ios-plus-empty media-object bg-blue"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New User Registered</h6>
                                    <div class="text-muted f-s-11">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="ion-ios-email-outline media-object bg-blue"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New Email From John</h6>
                                    <div class="text-muted f-s-11">2 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="user-image online">
								<img src="assets/img/user-13.jpg" alt="" />
							</span>
                        <span class="hidden-xs">Administrator</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="sidebar" class="sidebar">
        <div data-scrollbar="true" data-height="100%">
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;"><img src="images/trainer-6.jpg" alt="" /></a>
                    </div>
                    <div class="info">
                        Proprietress
                        <small>Administrator</small>
                    </div>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-header">Navigation</li>

                <li class="has-sub">
                    <a href="javascript:;">
                        <i class="ion-ios-home bg-blue"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <i class="ion-ios-briefcase-outline bg-gradient-purple"></i>
                        <span>Member Details</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html"><i class="ion-ios-calendar-outline bg-pink"></i>
                        <span>Schedules</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <i class="ion-ios-grid-view-outline bg-green"></i>
                        <span>Tables</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <i class="ion-stats-bars bg-gradient-orange"></i>
                        <span>Supplement Stocks</span>
                    </a>
                </li>
                <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-bg"></div>
    <div id="content" class="content">
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <h1 class="page-header">Admin Panel <small>Manage Everything with one click</small></h1>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-gradient-blue">
                    <div class="stats-icon"><i class="ion-ios-world"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL VISITORS</h4>
                        <p>3,291,922</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-gradient-aqua">
                    <div class="stats-icon"><i class="ion-ios-upload"></i></div>
                    <div class="stats-info">
                        <h4>BOUNCE RATE</h4>
                        <p>20.44%</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-gradient-purple">
                    <div class="stats-icon"><i class="ion-ios-pie"></i></div>
                    <div class="stats-info">
                        <h4>UNIQUE VISITORS</h4>
                        <p>1,291,922</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="widget widget-stats bg-gradient-orange">
                    <div class="stats-icon"><i class="ion-ios-clock"></i></div>
                    <div class="stats-info">
                        <h4>AVG TIME ON SITE</h4>
                        <p>00:12:23</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
<?php include 'panel_footer.php' ?>
</html>
