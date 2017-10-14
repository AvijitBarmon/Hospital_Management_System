<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$laboratorist = new \App\front\Labortorist\Labortorist();
$laboratorist = $laboratorist->view($_GET['id']);

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
                        Information of Labortorist
                    </div>
                    <div class="panel-body">
                        <dl>
                            <dt>Labortorist Name</dt>
                            <dd> <?php echo $laboratorist['name']?> </dd>
                            <dt>Address</dt>
                            <dd><?php echo  $laboratorist['address']?></dd>
                            <dt>Contact</dt>
                            <dd><?php echo  $laboratorist['contact']?></dd>
                            <dt>Email</dt>
                            <dd><?php echo  $laboratorist['email']?></dd>
                            <dt>Gender</dt>
                            <dd><?php echo $laboratorist['gender']?></dd>
                            <dt>Image</dt>
                            <dd><img  class="img-responsive" width="100" src="view/admin/labortorist/uploads/<?php echo $laboratorist['image']?>"</dd>
                        </dl>
                        <a href="view/front/labortorist/index.php" class="btn btn-danger" class="btn btn-default">Back
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




    <div style="position: fixed; top: 200px; right: 50px; z-index: 11111">
        <?php
        if(isset($_SESSION['msg'])){
            echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
            session_unset();
        }
        ?>
    </div>





<?php
include_once '../include/footer.php';
?>