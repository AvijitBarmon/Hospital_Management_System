<?php
session_start();
include_once '../../../vendor/autoload.php';
if(isset($_POST['submit'])){

    $auth = new \App\front\Auth\Auth();
    $data = $auth->set($_POST)->login();

    if(isset($data['id'])) {
        $_SESSION['user'] = $data['user'];
        header('location:../../../index.php');

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

    <title>e-hospital</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">




</head>

<body class="bg-success">

<div style="">
<?php

if(isset($_SESSION['msg'])){
    echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
    session_unset();
}
?>
</div>

<div class="container">
    <div class="row">
<h4>If you are new user,please click on  Sign Up</h4>
        <a class="navbar-brand" href="view/front/auth/registration.php">
    Sign up
</a>
</div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-info">
                    <div class="panel-heading info">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="user name or e-mail" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" type="password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Sign in</button>
                            </fieldset>
                        </form>
                    </div>



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
