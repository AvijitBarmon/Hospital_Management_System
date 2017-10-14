<?php
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';

$laboratorist = new \App\admin\Labortorist\Labortorist();
$laboratorist = $laboratorist->view($_GET['id']);



?>

    <div id="page-wrapper" style="min-height: 349px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Laboratory Registration</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Update Laboratory Registration
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8 col-md-offset-2">
                                <form role="form" action="view/admin/labortorist/update.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name" value="<?php echo $laboratorist['name']?>"
                                               class="form-control"type="text">

                                        <input type="hidden" value="<?php echo $laboratorist['unique_id']?>" name="id"
                                               class="form-control">
                                        <input type="hidden" value="<?php echo $laboratorist['image']?>" name="image"
                                               class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" rows="3"><?php echo $laboratorist['address']?></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input name="contact" class="form-control" value="<?php echo $laboratorist['contact']?>"type="text">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" class="form-control"type="text" value="<?php echo $laboratorist['email']?>">
                                    </div>




                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" id="" class="form-control">
                                            <option>Select One</option>
                                            <option <?php echo ($laboratorist['gender']=='Male')?'selected':'' ?> value="Male">Male</option>
                                            <option <?php echo ($laboratorist['gender']=='Female')?'selected':'' ?> value="Female">Female</option>
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="image"/>
                                    </div>

                                    <div style="padding-bottom: 25px">
                                        <img width="100" src="view/admin/labortorist/uploads/<?php echo $laboratorist['image']?>" alt="">
                                    </div>




                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

<?php
include_once '../include/footer.php';
?>