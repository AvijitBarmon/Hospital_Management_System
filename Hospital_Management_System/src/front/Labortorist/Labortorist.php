<?php
namespace App\front\Labortorist;

if(!isset($_SESSION)){
    session_start();
}
use App\admin\Helper\Connection;
use PDO;
use PDOException;


class Labortorist extends Connection
{
    private $name;
    private $address;
    private $contact;
    private $email;
    private $gender;
    private $image;
    private $id;

    public function set(array $data)
    {

        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }

        if (array_key_exists('address', $data)) {
            $this->address = $data['address'];
        }

        if (array_key_exists('contact', $data)) {
            $this->contact = $data['contact'];
        }

        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }

        if (array_key_exists('gender', $data)) {
            $this->gender = $data['gender'];
        }

        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }

        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }

        return $this;
    }

    public function store()
    {
        try {
            $stmt = $this->con->prepare("INSERT INTO `labortorist`(`name`,`address`,`contact`,`email`,`gender`,`image`,`unique_id`) 
                                                    VALUES(:name,:address,:contact,:email,:gender,:image,:unique_id)");

            $result = $stmt->execute(array(
                ':name' => $this->name,
                ':address' => $this->address,
                ':contact' => $this->contact,
                ':email' => $this->email,
                ':gender' => $this->gender,
                ':image' => $this->image,
                ':unique_id' => md5(time())
            ));
            if ($result) {
                $_SESSION['insert'] = 'Data Successfully Inserted !!';
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

            $stm = $this->con->prepare("SELECT * FROM `labortorist` WHERE `deleted_at` = '0000-00-00 00:00:00'");
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
            $stmt = $this->con->prepare("SELECT * FROM `labortorist` WHERE unique_id = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
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

            $stm = $this->con->prepare("DELETE FROM `labortorist` WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['delete'] = 'Data Successfully Deleted !!!';
                header('location:trash.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



    public function update()
    {
        try {
            $stmt = $this->con->prepare("UPDATE `hospital`.`labortorist` SET `name` = :name, `address` = :address, `contact` = :contact, `email` = :email, `gender` = :gender, `image` = :image WHERE `labortorist`.`unique_id`= :id;");
            $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_INT);
            $stmt->bindValue(':contact', $this->contact, PDO::PARAM_INT);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_INT);
            $stmt->bindValue(':gender', $this->gender, PDO::PARAM_INT);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['update'] = 'Data Successfully Updated !!';
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

            $stm = $this->con->prepare("UPDATE `labortorist` SET `deleted_at` = NOW() WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['delete'] = 'Data Successfully Deleted !!!';
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

            $stm = $this->con->prepare("UPDATE `labortorist` SET `deleted_at` = '0000-00-00 00:00:00' WHERE unique_id = :id");
            $stm->bindValue(':id', $id, PDO::PARAM_STR);
            $stm->execute();
            if ($stm) {
                $_SESSION['restore'] = 'Data Succesfully Restored !!!';
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

            $stm = $this->con->prepare("SELECT * FROM `labortorist` WHERE `deleted_at` != '0000-00-00 00:00:00'");

            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}