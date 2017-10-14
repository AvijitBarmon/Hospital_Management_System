<?php
/**
 * Created by PhpStorm.
 * User: Fahim
 * Date: 9/22/2017
 * Time: 8:21 PM
 */

namespace App\admin\Helper;
use PDO;

class Helper1 extends Connection
{
    public function img_delete($id){
        $stmt = $this->con->prepare("SELECT `image` FROM `patient` WHERE `patient`.`unique_id` = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $image_name = $stmt->fetch(PDO::FETCH_ASSOC);
        $dat ='uploads/'.$image_name['image'];
        if(isset($dat)){
            unlink($dat);
        }

    }

    public function image_upload(){
        $_POST['image'] = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $name =  substr(md5(time()),'0','10');
        $data = explode('.',$_POST['image']);
        $_POST['image'] = $name.'.'.end($data);

        move_uploaded_file($image_tmp_name,'uploads/'.$_POST['image']);
        return $_POST['image'];
    }

}