<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 10/4/2017
 * Time: 12:47 PM
 */

include_once '../include/header.php';

include_once '../../../vendor/autoload.php';

$appointment = new \App\admin\Appointment\Appointment();
$appointment = $appointment->view($_GET['id']);

//$doctor = new \App\admin\Appointment\Appointment();

//$doctor = $doctor->view($_GET['id']);


?>
<!-- this would be added every single pages -->
<div class="" style=" margin-left: 280px;">
    <!-- this would be added every single pages -->


    <div class="col-md-12" style="width: 1080px;">
        <div class="h3 text-info text-left">Update Appointment</div>
        <hr>


        <div class="col-md-6">

            <form action="view/admin/appointment/update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $appointment['unique_id']; ?>" name="id" class="form-control">

                <div class="form-group">
                    <label>Patient Name</label>
                    <select name="patient" id="" class="form-control">
                        <option>Select One</option>
                        <option <?php echo ($appointment['patient']=='Rahim')?'selected':''?> value="Rahim">Rahim</option>
                        <option <?php echo ($appointment['patient']=='Rahima')?'selected':''?> value="Rahima">Rahima</option>

                    </select>
                </div>


                <div class="form-group">
                    <label>Doctor Name</label>
                    <select name="doctor" id="" class="form-control">
                        <option>Select One</option>
                        <option <?php echo ($appointment['doctor']=='Mr.sohag')?'selected':'' ?> value="Mr.sohag">Mr.sohag</option>
                        <option <?php echo ($appointment['doctor']=='Mrs.Riya')?'selected':'' ?> value="Mrs.Riya">Mrs.Riya</option>
                        <option <?php echo ($appointment['doctor']=='Mr.masud')?'selected':'' ?> value="Mr.masud">Mr.masud</option>
                    </select>
                </div>



                <div class="form-group">
                    <label>Category</label>
                    <select name="category" id="" class="form-control">
                        <option>Select One</option>
                        <option <?php echo ($appointment['category']=='Heart')?'selected':'' ?> value="Heart">Heart</option>
                        <option <?php echo ($appointment['category']=='Medicine')?'selected':'' ?> value="Medicine">Medicine</option>
                        <option <?php echo ($appointment['category']=='Neurology')?'selected':'' ?> value="Neurology">Neurology</option>
                        <option <?php echo ($appointment['category']=='Orthopology')?'selected':'' ?> value="Orthopology">Orthopology</option>
                        <option <?php echo ($appointment['category']=='Eye')?'selected':'' ?> value="Eye">Eye</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Appointment Date </label>
                    <input type="date" name="apt_date" id="" value="<?php print $appointment['apt_date'];?>" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Serial No</label>
                    <input type="text" name="serial_no" value="<?php print $appointment['serial_no'];?>" placeholder="Serial Number" id="serial_no" class="form-control form-control-sm">
                </div>



                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" id="submit"value="Update">

                </div>

            </form>
        </div>

    </div>





    <!-- main content closing here from bellow  -->
</div>



<?php include_once '../include/footer.php'; ?>