<?php
include_once '../../../vendor/autoload.php';

if(isset($_FILES['image'])){
    $imgUpload = new \App\front\Helper\Helper3();
    $_POST['image'] = $imgUpload->image_upload();
}

$laboratorist = new \App\front\Labortorist\Labortorist();
$laboratorist->set($_POST)->store();
