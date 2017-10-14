<?php
include_once '../../../vendor/autoload.php';


//echo rand();

if(isset($_FILES['image'])){
    $imgUpload = new \App\admin\Helper\Helper1();
    $_POST['image'] = $imgUpload->image_upload();
}

$nurse = new \App\admin\Nurse\Nurse();
$nurse->set($_POST)->store();
