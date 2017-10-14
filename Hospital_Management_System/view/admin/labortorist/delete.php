<?php

include_once '../../../vendor/autoload.php';
$laboratorist = new \App\admin\Labortorist\Labortorist();
$delete = new \App\admin\Helper\Helper3();
$delete->img_delete($_GET['id']);
$laboratorist = $laboratorist->delete($_GET['id']);
