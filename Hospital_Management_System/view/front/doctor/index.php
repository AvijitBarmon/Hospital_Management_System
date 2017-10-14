<?php


include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$doctor = new \App\front\Doctor\Doctor();
$doctors = $doctor->index();
?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doctor Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Doctor Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Category</th>
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
                        <td> <img width="100" src="view/admin/doctor/uploads/<?php echo $doctor['image']?>" alt=""></td>
                        <td><?php echo $doctor['category']?></td>
                        <td class="center">
                            <a href="view/front/doctor/view.php?id=<?php echo $doctor['unique_id']?>"class="btn btn-info btn-sm">View</a>

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