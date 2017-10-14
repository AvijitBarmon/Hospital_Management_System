<?php
include_once '../../../vendor/autoload.php';
$laboratorist = new \App\admin\Labortorist\Labortorist();
$laboratorists = $laboratorist->restore($_GET['id']);