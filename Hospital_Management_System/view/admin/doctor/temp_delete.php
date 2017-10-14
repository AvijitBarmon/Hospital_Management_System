<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Doctor\Doctor();
$doctors = $doctor->tmp_delete($_GET['id']);