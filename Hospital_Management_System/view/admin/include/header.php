<?php
if(!isset($_SESSION)){
    session_start();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Hospital</title>

    <base href="http://localhost/Hospital_Management_System/"/>
    <!-- Bootstrap Core CSS -->
    <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->





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
            <a class="navbar-brand" href="dashboard.php ">e-Hospital ADMIN PANEL</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ADMIN
                    <i class="fa fa-user"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li class="divider"></li>
                    <li><a href="view/admin/auth/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#">  <img src="assets/admin/doctor.jpg" width="40" >Doctor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view/admin/doctor/create.php ">Doctor Registration</a>
                            </li>
                            <li>
                                <a href="view/admin/doctor/index.php ">Details information of Doctor</a>
                            </li>

                            <li>
                                <a href="view/admin/doctor/trash.php "><i class="fa fa-trash fa-fw"></i>Trash</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>




                    <li>
                        <a href="#"><img src="assets/admin/patient.jpg" width="40" ><i class=""></i>Patient<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="view/admin/patient/index.php">Details information of Patient</a>
                            </li>

                            <li>
                                <a href=" view/admin/patient/trash.php"><i class="fa fa-trash fa-fw"></i>Trash</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><img src="assets/admin/Nurse.png" width="40" ><i class=" "></i>Nurse<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view/admin/nurse/create.php ">Nurse Registration</a>
                            </li>
                            <li>
                                <a href="view/admin/nurse/index.php ">Details information of Nurse</a>
                            </li>

                            <li>
                                <a href="view/admin/nurse/trash.php "><i class="fa fa-trash fa-fw"></i>Trash</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                    <li>
                        <a href="#"><img src="assets/admin/lab.png" width="40" >Labortorist<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view/admin/labortorist/create.php ">Labortorist Registration</a>
                            </li>
                            <li>
                                <a href="view/admin/labortorist/index.php ">Details information of Labortorist</a>
                            </li>

                            <li>
                                <a href="view/admin/labortorist/trash.php ">Trash<i class="fa fa-trash fa-fw"></i></a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>





                    <li>
                        <a href="#"><i class=" "></i>Appointment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view/admin/appointment/create.php">Add Appointment Information</a>
                            </li>
                            <li>
                                <a href=" view/admin/appointment/index.php ">Details information of Appointment</a>
                            </li>

                            <li>
                                <a href="view/admin/appointment/trash.php ">Trash<i class="fa fa-trash fa-fw"></i></a>
                            </li>

                        </ul>




</li>


                        </ul>
                        <!-- /.nav-second-level -->





            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>


    <?php


    if(!isset($_SESSION['user'])){
        // header('location: view/admin/auth/login.php');
        echo "<script>window.location= 'view/admin/auth/login.php'</script>";
    }


    ?>
