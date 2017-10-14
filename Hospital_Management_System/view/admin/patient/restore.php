<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Patient\Patient();
$doctors = $doctor->restore($_GET['id']);