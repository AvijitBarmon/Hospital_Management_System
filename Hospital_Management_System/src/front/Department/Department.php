<?php
/**
 * Created by PhpStorm.
 * User: Shah
 * Date: 10/9/2017
 * Time: 10:33 PM
 */

// Department
namespace App\front\Department;

if(!isset($_SESSION)){
    session_start();
}
use App\admin\Helper\Connection;
use PDO;
use PDOException;


class Department extends Connection
{
    private $department;
    private $description;
    private $id;

    public function set(array $data)
    {

        if (array_key_exists('department', $data)) {
            $this->department = $data['department'];
        }

        if (array_key_exists('description', $data)) {
            $this->description = $data['description'];
        }

        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }

        return $this;
    }

    public function store()
    {
        try {
            $stmt = $this->con->prepare("INSERT INTO `dpt`(`department`,`description`,`unique_id`) 
                                                    VALUES(:department,:description,:unique_id)");

            $result = $stmt->execute(array(
                ':department' => $this->department,
                ':description' => $this->description,
                ':unique_id' => md5(time())

            ));
            if ($result) {
                $_SESSION['insert'] = 'Department Add successfully !!';
                header('location: index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function index()
    {
        try {

            $stm = $this->con->prepare("SELECT * FROM `dpt` WHERE `deleted_at` = '0000-00-00 00:00:00'");
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
            $stmt = $this->con->prepare("SELECT * FROM `dpt` WHERE unique_id=:dd");
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

            $stm = $this->con->prepare("DELETE FROM `dpt` WHERE unique_id = :id");
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
            $stmt = $this->con->prepare("UPDATE `hospital`.`dpt` SET `department` = :department, `description` = :description WHERE `dpt`.`unique_id`= :id;");
            $stmt->bindValue(':department', $this->department, PDO::PARAM_INT);
            $stmt->bindValue(':description', $this->description, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['update'] = 'Department Updated !!';
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

            $stm = $this->con->prepare("UPDATE `dpt` SET `deleted_at` = NOW() WHERE unique_id = :id");
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

            $stm = $this->con->prepare("UPDATE `dpt` SET `deleted_at` = '0000-00-00 00:00:00' WHERE unique_id = :id");
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

            $stm = $this->con->prepare("SELECT * FROM `dpt` WHERE `deleted_at` != '0000-00-00 00:00:00'");

            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}










