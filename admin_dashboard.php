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
                <a href="index.php" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Rathnayake</b> Gyms</a>
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
                    <div class="stats-icon"><i class="fa fa-group"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL MEMBERS</h4>
                        <p>1,500</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-gradient-aqua">
                    <div class="stats-icon"><i class="fa fa-user"></i></div>
                    <div class="stats-info">
                        <h4>INSTRUCTORS</h4>
                        <p>5</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-gradient-purple">
                    <div class="stats-icon"><i class="fa fa-columns"></i></div>
                    <div class="stats-info">
                        <h4>SUPPLEMENET STOCK</h4>
                        <p>5,000</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="widget widget-stats bg-gradient-orange">
                    <div class="stats-icon"><i class="fa fa-gear"></i></div>
                    <div class="stats-info">
                        <h4>ADD NEW USER</h4>
                        <p>2</p>
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
