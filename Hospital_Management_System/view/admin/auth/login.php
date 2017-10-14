<?php
session_start();
include_once '../../../vendor/autoload.php';
if(isset($_POST['submit'])) {

    $auth = new \App\admin\Auth\Auth();
    $data = $auth->set($_POST)->login();

    if (isset($data['id'])) {
        $_SESSION['user'] = $data['user'];
        header('location:../../../dashboard.php');
    }
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

    <base href="http://localhost/Hospital_Management_System/"/>

    <title>Hospital_Management_System</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">ADMIN PANEL</h3>
                </div>
                <div class="panel-info">
                    <form role="form" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="name or E-mail" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
                <a href="index.php" class="btn btn-danger" class="btn btn-default">Back
                </a>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../../../assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../../../assets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../../assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
