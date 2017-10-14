<?php


include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$doctor = new \App\admin\Patient\Patient();
$doctors = $doctor->trash();
?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Trash data</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <div style="">
            <?php

            if(isset($_SESSION['restore'])){
                echo "<div class='alert alert-success'>".$_SESSION['restore']."</div>";
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
                    <th>Patient Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Gender</th>
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
                        <td><?php echo $doctor['gender']?></td>
                        <td> <img width="100" src="view/admin/patient/uploads/<?php echo $doctor['image']?>" alt=""></td>

                        <td class="center">

                            <a href="view/admin/patient/restore.php?id=<?php echo $doctor['unique_id']?>">Restore</a>
                            <a data-toggle="modal" data-target="#myModal" data-id="<?php echo $doctor['unique_id']?>"
                               class="text-danger delete" href="#" >Delete</a>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="view/admin/patient/delete.php" method="get">
                    <input id="delete" type="hidden" name="id">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Are you sure want to Delete ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
        </div>
    </div>

    <!-- /.modal-dialog



</div>
<!-- /.panel-body -->

    <!-- /.panel -->


<?php
include_once '../include/footer.php';
?>