<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Appointment\Appointment();
$doctors = $doctor->restore($_GET['id']);