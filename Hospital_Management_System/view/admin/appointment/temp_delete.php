<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Appointment\Appointment();
$doctors = $doctor->tmp_delete($_GET['id']);