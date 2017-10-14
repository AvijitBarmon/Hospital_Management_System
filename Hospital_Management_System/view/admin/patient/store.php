<?php
include_once '../../../vendor/autoload.php';


//echo rand();

if(isset($_FILES['image'])){
    $imgUpload = new \App\admin\Helper\Helper1();
    $_POST['image'] = $imgUpload->image_upload();
}

$doctor = new \App\admin\Patient\Patient();
$doctor->set($_POST)->store();
