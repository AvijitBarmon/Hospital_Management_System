<?php
include_once '../include/header.php';

include_once '../../../vendor/autoload.php';

$doctor = new \App\admin\Doctor\Doctor();
$doctor = $doctor->view($_GET['id']);


?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Information of Doctor
                    </div>
                    <div class="panel-body">
                        <dl>
                            <dt>Name of Doctor</dt>
                            <dd> <?php echo $doctor['name']?> </dd>
                            <dt>Address</dt>
                            <dd><?php echo  $doctor['address']?></dd>
                            <dt>Contact</dt>
                            <dd><?php echo  $doctor['contact']?></dd>
                            <dt>Email</dt>
                            <dd><?php echo  $doctor['email']?></dd>
                            <dt>Gender</dt>
                            <dd><?php echo $doctor['gender']?></dd>
                            <dt>Image</dt>
                            <dd><img  class="img-responsive" width="100" src="view/admin/doctor/uploads/<?php echo $doctor['image']?>"</dd>
                            <dt>Category</dt>
                            <dd><?php echo $doctor['category']?></dd>
                        </dl>
                        <a href="view/front/doctor/index.php" class="btn btn-danger" class="btn btn-default">Back
                        </a>
                    </div>

                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>










<?php
include_once '../include/footer.php';
?>