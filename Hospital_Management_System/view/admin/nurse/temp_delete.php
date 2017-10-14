<?php
include_once '../../../vendor/autoload.php';
$doctor = new \App\admin\Nurse\Nurse();
$doctors = $doctor->tmp_delete($_GET['id']);