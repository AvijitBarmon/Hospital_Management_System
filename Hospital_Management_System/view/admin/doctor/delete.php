<?php

include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Doctor\Doctor();
$delete = new \App\admin\Helper\Helper();
$delete->img_delete($_GET['id']);
$doctor = $doctor->delete($_GET['id']);
