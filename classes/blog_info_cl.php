<?php
class Blog 
{
    private $error = "";
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
            $this -> CreateBlog($data, $email);
        }else {
            return $this -> error;
        }
    }
    public function CreateBlog($data, $email)
    {
        # insert data in database
 $food_name = $_POST['fname'];
$food_price = $_POST['price'];
$food_description = $_POST['info'];
$food_pic = $_FILES['food_pic']['name'];
$food_pic_tmp = $_FILES['food_pic']['tmp_name'];

move_uploaded_file($food_pic_tmp,"./blog_images/$food_pic");

$query = "INSERT INTO blog (email,food_name, food_price, food_description, images, date) 
VALUES ('$email', '$food_name', '$food_price', '$food_description', '$food_pic', NOW())";

$db = new Db();
$db -> Write_db($query);

    }

    public function Get_blog($email)
    { 
 
        $query = " SELECT * FROM blog WHERE email = '$email'  ";
 
         $db = new Db();
         $result = $db -> Read_db($query);
 
        if ($result) {
           return $result;
        }else {
            return false;
        }
                               
 
     }

     public function Get_blog_dt($id)
     { 
  
         $query = " SELECT * FROM blog WHERE id = '$id'  ";
  
          $db = new Db();
          $result = $db -> Read_db($query);
  
         if ($result) {
            return $result;
         }else {
             return false;
         }
                                
  
      }










     
    
}

?>