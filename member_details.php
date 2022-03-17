<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <?php include 'panel_header.php'?>
    <script src="plugins/switchery/switchery.min.js"></script>
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
                    <a href="register.php">
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
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <h1 class="page-header">Admin Panel <small>Manage Everything with one click</small></h1>
        <div class="row">
            <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Data Table - Default</h4>
                </div>
                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Payments</th>
                            <th>Member Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>John</td>
                            <td>18</td>
                            <td>0771234567</td>
                            <td>No. 56 , Colombo 07</td>
                            <td>Payment Done</td>
                            <td><input type="checkbox" data-render="switchery" data-theme="default" checked /></td>
                        </tr>
                        <tr class="even gradeC">
                            <td>John</td>
                            <td>18</td>
                            <td>0771234567</td>
                            <td>No. 56 , Colombo 07</td>
                            <td>Payment Done</td>
                            <td><input type="checkbox" data-render="switchery" data-theme="default" checked /></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>John</td>
                            <td>18</td>
                            <td>0771234567</td>
                            <td>No. 56 , Colombo 07</td>
                            <td>Payment Done</td>
                            <td><input type="checkbox" data-render="switchery" data-theme="default" checked /></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>John</td>
                            <td>18</td>
                            <td>0771234567</td>
                            <td>No. 56 , Colombo 07</td>
                            <td>Payment Done</td>
                            <td><input type="checkbox" data-render="switchery" data-theme="default" checked /></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>John</td>
                            <td>18</td>
                            <td>0771234567</td>
                            <td>No. 56 , Colombo 07</td>
                            <td>Payment Done</td>
                            <td><input type="checkbox" data-render="switchery" data-theme="default" checked /></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end panel -->
        </div>
      </div>
    </div>
    <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
</div>
<?php include 'panel_footer.php' ?>
<link href="plugins/switchery/switchery.min.css" rel="stylesheet" />
</html>
