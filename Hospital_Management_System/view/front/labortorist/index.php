<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$laboratorist = new \App\front\Labortorist\Labortorist();
$laboratorists = $laboratorist->index();
?>

    <div id="page-wrapper" style="min-height: 349px;">
    <div class="row">
        <div class="col-lg-12 ">
            <h1 class="page-header">Labortorist Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>



        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Labortorist Name</th>
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
                        <td> <img width="100" src="view/admin/labortorist/uploads/<?php echo $laboratorist['image']?>" alt="Laboratory image"></td>
                        <td class="center">
                            <a href="view/front/labortorist/view.php?id=<?php echo $laboratorist['unique_id']?>"class="btn btn-info btn-sm">View</a>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>




    <!-- /.modal-dialog



</div>
<!-- /.panel-body -->

    <!-- /.panel -->


<?php
include_once '../include/footer.php';
?>