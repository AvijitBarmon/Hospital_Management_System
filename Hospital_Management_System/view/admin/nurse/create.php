<?php
include_once '../include/header.php';

?>

<div id="page-wrapper" style="min-height: 349px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Nurse Registration</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Nurse Registration
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">
                            <form role="form" action="view/admin/nurse/store.php" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name of Nurse</label>
                                    <input name="name" class="form-control" type="text">
                                </div>


                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                </div>


                                <div class="form-group">
                                    <label>Contact</label>
                                    <input name="contact" class="form-control"type="text">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control"type="text">
                                </div>







                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="image"/>
                                </div>






                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
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

