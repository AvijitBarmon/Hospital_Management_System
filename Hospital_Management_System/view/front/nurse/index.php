<?php


include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$doctor = new \App\front\Nurse\Nurse();
$doctors = $doctor->index();
?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nurse Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <div style="">
            <?php

            if(isset($_SESSION['insert'])){
                echo "<div class='alert alert-success'>".$_SESSION['insert']."</div>";
                session_unset();
            }
            if(isset($_SESSION['update'])){
                echo "<div class='alert alert-info'>".$_SESSION['update']."</div>";
                session_unset();
            }
            if(isset($_SESSION['delete'])){
                echo "<div class='alert alert-danger'>".$_SESSION['delete']."</div>";
                session_unset();
            }
            ?>

        </div>




        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Nurse Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $sl = 1;
                foreach ($doctors as $doctor){
                    ?>
                    <tr>
                        <td><?php echo $sl++?></td>
                        <td><?php echo $doctor['name']?></td>
                        <td><?php echo $doctor['address']?></td>
                        <td><?php echo $doctor['contact']?></td>
                        <td><?php echo $doctor['email']?></td>
                        <td> <img width="100" src="view/admin/nurse/uploads/<?php echo $doctor['image']?>" alt=""></td>

                        <td class="center">
                            <a href="view/front/nurse/view.php?id=<?php echo $doctor['unique_id']?>"class="btn btn-info btn-sm">View</a>


                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>



    </div>

    <!-- /.modal-dialog



</div>
<!-- /.panel-body -->

    <!-- /.panel -->


<?php
include_once '../include/footer.php';
?>