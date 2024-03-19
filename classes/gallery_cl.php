<?php
/**
 * undocumented class
 */
class Gallery 
{
    private $error="";
    public function Evaluate($data, $email)
    {
        # code...
        foreach ($data as $key => $value) {
            # code...
            if (empty($value)) {
                # code...
                $this -> error = $this -> error . $key . "is empty ";
            }
        }
        if ($this -> error == "") {
            # calling function
            $this -> CreateGallery($data, $email);
        }else {
            return $this -> error;
        }
    }
    public function CreateGallery($data, $email)
    {
        $pic = $_FILES['pic']['name'];
        $pic_tmp = $_FILES['pic']['tmp_name'];

        move_uploaded_file($pic_tmp,"./gallery_images/$pic");

        $query = "INSERT INTO gallery (email, images, date) 
VALUES ('$email', '$pic', NOW())";

$db = new Db();
$db -> Write_db($query);
    }
    public function Get_gallery($email)
    { 
 
        $query = " SELECT * FROM gallery WHERE email = '$email'  ";
 
         $db = new Db();
         $result = $db -> Read_db($query);
 
        if ($result) {
           return $result;
        }else {
            return false;
        }
                               
 
     }
     public function Get_gallery_dt($id)
    { 
 
        $query = " SELECT * FROM gallery WHERE id = '$id'  ";
 
         $db = new Db();
         $result = $db -> Read_db($query);
 
        if ($result) {
           return $result;
        }else {
            return false;
        }
                               
 
     }
     public function Up_gallery($id, $data)
     {
        # code...
    $img = $_FILES['pic']['name'];
    $img_tmp = $_FILES['pic']['tmp_name'];
  

    move_uploaded_file($img_tmp,"/gallery_images/$img");
    $query = "UPDATE gallery SET images ='$img', date=NOW() WHERE id = '$id' ";

    $d = new Db();
    $d -> Update_db($query);
     }
    
}


?>