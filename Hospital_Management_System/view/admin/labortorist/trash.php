<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$laboratorist = new \App\admin\Labortorist\Labortorist();
$laboratorists = $laboratorist->trash();
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
                    <th>Name</th>
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
                foreach ($laboratorists as $laboratorist){
                    ?>
                    <tr>
                        <td><?php echo $sl++?></td>
                        <td><?php echo $laboratorist['name']?></td>
                        <td><?php echo $laboratorist['address']?></td>
                        <td><?php echo $laboratorist['contact']?></td>
                        <td><?php echo $laboratorist['email']?></td>
                        <td><?php echo $laboratorist['gender']?></td>
                        <td> <img width="100" src="view/admin/labortorist/uploads/<?php echo $laboratorist['image']?>" alt=""></td>
                        <td class="center">

                            <a href="view/admin/labortorist/restore.php?id=<?php echo $laboratorist['unique_id']?>">Restore</a>
                            <a data-toggle="modal" data-target="#myModal" data-id="<?php echo $laboratorist['unique_id']?>"
                               class="text-danger delete" href="#" >Delete</a>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="view/admin/labortorist/delete.php" method="get">
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