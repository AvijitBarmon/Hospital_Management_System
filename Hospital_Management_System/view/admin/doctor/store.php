<?php
include_once '../../../vendor/autoload.php';


//echo rand();

if(isset($_FILES['image'])){
    $imgUpload = new \App\admin\Helper\Helper();
    $_POST['image'] = $imgUpload->image_upload();
}

$doctor = new \App\admin\Doctor\Doctor();
$doctor->set($_POST)->store();
