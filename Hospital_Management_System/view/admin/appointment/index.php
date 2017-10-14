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

$appointments = $appointment->index();

?>


<!-- this would be added every single pages -->
<div class="" style="margin-top: 50px; margin-left: 280px;">
    <!-- this would be added every single pages -->

    <div class="row">

        <div class="col-md-12">


            <div class="h1 text-info">Appointment</div>
            <hr>


            <table class="table table-hover" >
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Patient Name</th>
                    <th>Doctor</th>
                    <th>Category</th>
                    <th>Appointment Date</th>
                    <th>Serial No.of appointment</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>

                <?php
                $i = 1;
                foreach ($appointments as $appointment){
                    ?>

                    <tbody>
                    <tr>
                        <td><?php print $i++ ?></td>
                        <td><?php print $appointment['patient']; ?></td>
                        <td><?php print $appointment['doctor']; ?></td>
                        <td><?php print $appointment['category']; ?></td>
                        <td><?php print $appointment['apt_date']; ?></td>
                        <td><?php print $appointment['serial_no']; ?></td>
                        <td>

                            <a href="view/admin/appointment/view.php?id=<?php print $appointment['unique_id'];?>" class="btn btn-info btn-sm">View</a>
                            <a href="view/admin/appointment/edit.php?id=<?php print $appointment['unique_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a data-toggle="modal" data-target="#myModal" data-id="<?php echo $appointment['unique_id']?>"
                               class="text-danger delete" href="#" >Delete</a>
                        </td>

                    </tr>
                    </tbody>

                <?php } ?>

            </table>

        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="view/admin/appointment/temp_delete.php" method="get">
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






    <!-- main content closing here from bellow  -->
</div>


<?php include_once '../include/footer.php'; ?>


