<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Hospital </title>

    <base href="http://localhost/Hospital_Management_System/"/>

    <!-- css -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/front/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/front/plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="assets/front/css/nivo-lightbox.css" rel="stylesheet" />
    <link href="assets/front/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="assets/front/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="assets/front/css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="assets/front/css/animate.css" rel="stylesheet" />
    <link href="assets/front/css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="assets/front/bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="assets/front/color/default.css" rel="stylesheet">

    <!-- =======================================================
        Theme Name: Medicio
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-light">e-Hospital  </p>
                    </div>

                </div>
            </div>
        </div>



        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=" ">
                    <img src="  " alt="" width="" height="" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="view/front/doctor/index.php ">Doctor</a></li>
                    <li><a href="view/front/nurse/index.php ">Nurse</a></li>
                    <li><a href="view/front/labortorist/index.php ">Labortorist</a></li>
                    <li><a href="view/admin/auth/login.php">ADMIN</a></li>






                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown">Settings  <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href=" view/front/auth/login.php"><i class="fa fa-sign-out fa-fw"></i>User Sign out</a></li>

                        </ul>
                    </li>









                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php


if(!isset($_SESSION['user'])){
    // header('location: view/admin/auth/login.php');
    echo "<script>window.location= 'view/front/auth/login.php'</script>";
}


?>