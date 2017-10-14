<?php
include_once '../../../vendor/autoload.php';

if(isset($_FILES['image'])){
    $imgUpload = new \App\admin\Helper\Helper3();
    $_POST['image'] = $imgUpload->image_upload();
}

$laboratorist = new \App\admin\Labortorist\Labortorist();
$laboratorist->set($_POST)->store();
