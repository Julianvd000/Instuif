<?php

?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $GLOBALS['config']['project-name']; ?></title>
    <link href="assets/css/css/fontawesome-all.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


            <img class="imageLogo" src="./assets/images/logo.jpg" alt="">
            <br>

            </div>
            <?php echo " <a class='navbar-brand' href='./'> <i class='fas fa-home'></i> ".$GLOBALS['config']['project-name']. "</a>"; ?>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->



                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <?php if (false): ?>
                      <ul class="dropdown-menu dropdown-user">
                          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                          </li>
                          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                          </li>
                          <li class="divider"></li>
                          <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                          </li>
                      </ul>
                    <?php else: ?>
                      <ul class="dropdown-menu dropdown-user">
                          <li><a href=""><i class="fa fa-sign-out fa-fw"></i>Login</a>
                          </li>
                      </ul>
                    <?php endif; ?>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
                </li>
                <!-- /.dropdown -->
            <!-- /.navbar-top-links -->



            <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                <?php if (false): ?>
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>



                        <li>
                                <a href="#"><i class="fa fa-child" aria-hidden="true"></i> Kids<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                  <li>
                                      <a href="index.php?controller=Kids&action=AanwezigOrAfwezig">Aanwezig of Afwezig</a>
                                  </li>
                                    <li>
                                        <a href="index.php?controller=Kids&action=overview">Overzicht</a>
                                    </li>
                                    <li>
                                        <a href="index.php?controller=Kids&action=create">Aanmaken</a>

                                    </li>
                                    <li>
                                        <a href="index.php?controller=Kids&action=update">wijzigen</a>
                                    </li>
                                    <li>
                                        <a href="index.php?controller=Kids&action=delete">archiveren</a>
                                    </li>
                                </ul>
                              </li>
                      <?php endif; ?>
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
