<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 10/4/2017
 * Time: 12:47 PM
 */

include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$doctor = new App\admin\Doctor\Doctor();
$doctors = $doctor->index();


//$doctor = new App\admin\Doctor\Doctor();
//$doctors = $doctor->index();

$patient= new \App\admin\Patient\Patient();
$patients = $patient->index();



?>

<!-- this would be added every single pages -->
<div class="" style=" margin-left: 280px;">
    <!-- this would be added every single pages -->


    <div class="col-md-12" style="width: 980px;">
        <div class="h3 text-info text-left">Add Appointment</div>
        <hr>


        <div class="col-md-6">

            <form action="view/admin/appointment/store.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Patient Name </label>

                    <select name="patient" class="form-control">
                        <option value="" hidden="hidden">Select One</option>
                        <?php
                        foreach ($patients as $patient){
                            echo "<option value='".$patient['name']."'>".$patient['name']."</option>";
                        }
                        ?>

                    </select>


                </div>


                <div class="form-group">
                    <label>Doctor Name</label>
                    <select name="doctor" class="form-control">
                        <option value="" hidden="hidden">Select One</option>
                        <?php
                        foreach ($doctors as $doctor){
                            echo "<option value='".$doctor['name']."'>".$doctor['name']."</option>";
                        }
                        ?>

                    </select>

                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select name="category" class="form-control">
                        <option value="" hidden="hidden">Select One</option>
                        <?php
                        foreach ($doctors as $doctor){
                            echo "<option value='".$doctor['category']."'>".$doctor['category']."</option>";
                        }
                        ?>

                    </select>
                    <!--                    <input type="text" name="doctor" value="--><?php //echo $doctor['name'] ;?><!--" id="doctor" class="form-control form-control-sm">-->
                </div>

                <div class="form-group">
                    <label for="">Appointment Date </label>
                    <input type="date" name="apt_date" id="" value="" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Serial No</label>
                    <input type="text" name="serial_no" value=" " placeholder="Serial Number" id="serial_no" class="form-control form-control-sm">
                </div>



                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit">
                    <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                </div>

            </form>
        </div>

    </div>





    <!-- main content closing here from bellow  -->
</div>



<?php include_once '../include/footer.php'; ?>