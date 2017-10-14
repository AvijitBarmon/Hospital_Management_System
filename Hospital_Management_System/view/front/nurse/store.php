<?php
include_once '../../../vendor/autoload.php';


//echo rand();

if(isset($_FILES['image'])){
    $imgUpload = new \App\front\Helper\Helper2();
    $_POST['image'] = $imgUpload->image_upload();
}

$nurse = new \App\front\Nurse\Nurse();
$nurse->set($_POST)->store();
