<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 10/4/2017
 * Time: 12:48 PM
 */

include_once '../../../vendor/autoload.php';


$appointment = new App\admin\Appointment\Appointment();
$appointment->set($_POST)->update();


//$student = new \App\admin\Student\Student();
//
//$student->set($_POST)->update();
