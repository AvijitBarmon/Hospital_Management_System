<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 10/4/2017
 * Time: 12:48 PM
 */
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';



$appointment =  new App\admin\Appointment\Appointment();

$appointment = $appointment->view($_GET['id']);

?>



    <!-- this would be added every single pages -->
    <div class=""">
<!--    <div class="" style="margin-top: 100px; margin-left: 280px; width: 980px;">-->
        <!-- this would be added every single pages -->


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="h3 text-info">Full Details of Appointment  </div>                        <hr>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div style="position: fixed; top: 200px; right: 50px; z-index: 11111">
                    <?php
                    if(isset($_SESSION['msg'])){
                        echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
                        session_unset();
                    }
                    ?>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <dl>
                                    <dt>Patient Name</dt>
                                    <dd><?php print $appointment['patient']; ?></dd>
                                    <dt>Doctor's Name </dt>
                                    <dd><?php print $appointment['doctor']; ?></dd>
                                    <dt>Category Name</dt>
                                    <dd><?php print $appointment['category']; ?></dd>
                                    <dt>Appointment Date </dt>
                                    <dd><?php print $appointment['apt_date']; ?></dd>
                                    <dt>Serial Number of appointment </dt>
                                    <dd><?php print $appointment['serial_no']; ?></dd>

                                    <a href="view/admin/appointment/index.php" class="btn btn-danger" class="btn btn-default">Back
                                    </a>
                                </dl>
                            </div>
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>








        <!-- main content closing here from bellow  -->
    </div>

<?php include_once '../include/footer.php'; ?>



<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet architecto commodi dolore fuga itaque iusto libero maxime officia veritatis.-->