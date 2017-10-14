<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Doctor\Doctor();
$doctors = $doctor->restore($_GET['id']);