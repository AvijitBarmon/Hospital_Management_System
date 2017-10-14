<?php
include_once '../../../vendor/autoload.php';


//echo rand();

if(isset($_FILES['image'])){
    $imgUpload = new \App\front\Helper\Helper();
    $_POST['image'] = $imgUpload->image_upload();
}

$doctor = new \App\front\Doctor\Doctor();
$doctor->set($_POST)->store();
