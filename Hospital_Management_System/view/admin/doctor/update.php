<?php
include_once '../../../vendor/autoload.php';

if((!empty($_FILES['image']['name']))){
    $helper = new \App\admin\Helper\Helper();
    $_POST['image'] = $helper->image_upload();
    $helper->img_delete($_POST['id']);
}

$doctor = new \App\admin\Doctor\Doctor();

$doctor->set($_POST)->update();
//var_dump($doctor);