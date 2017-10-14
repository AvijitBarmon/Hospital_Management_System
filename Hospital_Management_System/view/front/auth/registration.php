<?php
session_start();
include_once '../../../vendor/autoload.php';
if(isset($_POST['submit'])){
   $auth = new \App\front\Auth\Auth();
   $auth->set($_POST)->store();
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



    <title>e-hospital</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">User Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="User Name" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Sign Up</button>
                        </fieldset>
                    </form>
                </div>

                <a href="view/front/auth/login.php" class="btn btn-info" class="btn btn-default">Back
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
