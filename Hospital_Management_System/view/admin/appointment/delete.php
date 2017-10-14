<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 10/4/2017
 * Time: 12:47 PM
 */

//include_once '../include/header.php';

include_once '../../../vendor/autoload.php';

//$appointment = new \App\admin\Appointment\Appointment();
//$appointment = $appointment->set($_GET)->delete(id);


$department = new \App\admin\Appointment\Appointment();
//$delete = new \App\admin\Helper\Helper();
//$delete->img_delete($_GET['id']);
$department = $department->delete($_GET['id']);
