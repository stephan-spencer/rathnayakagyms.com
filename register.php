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
                    <a href="admin_dashboard.php">
                        <i class="ion-ios-home bg-blue"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="member_details.php">
                        <i class="ion-ios-briefcase-outline bg-gradient-purple"></i>
                        <span>Member Details</span>
                    </a>
                </li>
                <li>
                    <a href="schedule.php"><i class="ion-ios-calendar-outline bg-pink"></i>
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

        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Add New User</h4>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="fullname">Full Name * :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="email">Email * :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="website">Age :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="url" id="age" name="age" data-parsley-type="url" placeholder="Age" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="message">Password :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="password" name="password" data-parsley-type="digits" placeholder="Password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="message">Confirm Password :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="con_pass" name="con_pass" data-parsley-type="con_pass" placeholder="Confirm Password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4" for="message">Phone :</label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="text" id="data-phone" data-parsley-type="number" placeholder="(+94) XXXX XXX" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4"></label>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
    <div class="row">
        <!-- begin col-6 -->

<?php include 'panel_footer.php' ?>
</html>
