<?php
/**
 * Created by PhpStorm.
 * User: Shah
 * Date: 10/6/2017
 * Time: 9:19 PM
 */



namespace App\admin\Appointment;

if(!isset($_SESSION)){
    session_start();
}
use App\admin\Helper\Connection;
use PDO;
use PDOException;


class Appointment extends Connection
{
            private $patient;
           private $doctor;
           private $category;
            private $apt_date;
            private $serial_no;

            private $id;

    public function set(array $data)
    {

    if (array_key_exists('patient',$data)) {
        $this->patient = $data['patient'];
    }

    if (array_key_exists('doctor',$data)) {
        $this->doctor = $data['doctor'];
    }
        if (array_key_exists('category',$data)) {
            $this->category = $data['category'];
        }

    if (array_key_exists('apt_date',$data)) {
        $this->apt_date = $data['apt_date'];
    }
    if (array_key_exists('serial_no',$data)) {
        $this->serial_no = $data['serial_no'];
    }

    if (array_key_exists('id', $data)) {
        $this->id = $data['id'];
    }
    return $this;


    }

    public function store()
    {
        try {
//            $stmt = $this->con->prepare("INSERT INTO `appointment`(patient_id,dept,doctor,apt_date,serial_no,problem) VALUES(:patient_id,:dept,:doctor,:apt_date,:serial_no,:problem);");
            $stmt = $this->con->prepare("INSERT INTO `appointment`(patient, doctor, category, apt_date,serial_no,unique_id) 
VALUES(:patient_id,:doctor,:category,:apt_date,:serial_no,:unique_id)");

            $result = $stmt->execute(array(
                ':patient_id' => $this->patient,
                ':doctor' => $this->doctor,
                ':category' => $this->category,
                ':apt_date' => $this->apt_date,
                ':serial_no' => $this->serial_no,
                ':unique_id' => md5(time())

            ));
            if ($result) {
                $_SESSION['patient'] = "Patient Added Successfully !!";
                header('location:index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function index()
    {
        try {

            $stm = $this->con->prepare("SELECT * FROM `appointment` WHERE `deleted_at` = '0000-00-00 00:00:00'");

            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view($id)
    {
        try {
            $stmt = $this->con->prepare("SELECT * FROM `appointment` WHERE unique_id=:dd");
            $stmt->bindValue(':dd', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function delete($id)
    {
        try {

            $stm = $this->con->prepare("DELETE FROM `appointment` WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location:index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function update()
    {
        try {
            $stmt = $this->con->prepare("UPDATE `hospital`.`appointment` SET `patient` = :patient_id, `doctor` = :doctor,`category`=:category,`apt_date` = :apt_date,`serial_no` = :serial_no WHERE `appointment`.`unique_id`= :id;");
            $stmt->bindValue(':patient_id', $this->patient, PDO::PARAM_INT);

            $stmt->bindValue(':doctor', $this->doctor, PDO::PARAM_INT);

            $stmt->bindValue(':category', $this->category, PDO::PARAM_INT);
            $stmt->bindValue(':apt_date', $this->apt_date, PDO::PARAM_INT);

            $stmt->bindValue(':serial_no', $this->serial_no, PDO::PARAM_INT);


            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['update'] = 'Data successfully Updated !!';
                header('location: index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function tmp_delete($id)
    {
        try {

            $stm = $this->con->prepare("UPDATE `appointment` SET `deleted_at` = NOW() WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location:index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function restore($id)
    {
        try {

            $stm = $this->con->prepare("UPDATE `appointment` SET `deleted_at` = '0000-00-00 00:00:00' WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['restore'] = 'Data Restore successfully !!!';
                header('location:trash.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function trash()
    {
        try {

            $stm = $this->con->prepare("SELECT * FROM `appointment` WHERE `deleted_at` != '0000-00-00 00:00:00'");

            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}












