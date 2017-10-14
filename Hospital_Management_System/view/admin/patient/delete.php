<?php

include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Patient\Patient();
$delete = new \App\admin\Helper\Helper1();
$delete->img_delete($_GET['id']);
$doctor = $doctor->delete($_GET['id']);
