<?php

include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Nurse\Nurse();
$delete = new \App\admin\Helper\Helper2();
$delete->img_delete($_GET['id']);
$doctor = $doctor->delete($_GET['id']);
