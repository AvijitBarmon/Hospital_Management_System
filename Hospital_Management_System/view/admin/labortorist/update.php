<?php
include_once '../../../vendor/autoload.php';

if((!empty($_FILES['image']['name']))){
    $helper = new \App\admin\Helper\Helper3();
    $_POST['image'] = $helper->image_upload();
    $helper->img_delete($_POST['id']);
}

$laboratorist = new \App\admin\Labortorist\Labortorist();

$laboratorist->set($_POST)->update();
//var_dump($doctor);