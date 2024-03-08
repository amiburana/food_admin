<?php
class Company 
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
            $this -> Createcp($data, $email);
        }else {
            return $this -> error;
        }
    }
    public function Createcp($data, $email)
    {
        # insert data in database
$cp_description = $_POST['info'];
$cp_pic = $_FILES['food_pic']['name'];
$cp_pic_tmp = $_FILES['food_pic']['tmp_name'];

move_uploaded_file($cp_pic_tmp,"./company_images/$cp_pic");

$query = "INSERT INTO company (email, about, images, date) 
VALUES ('$email', '$cp_description', '$cp_pic', NOW())";

$db = new Db();
$db -> Write_db($query);

    }
    public function Get_company($email)
    {
        # code...
        
        $query = " SELECT * FROM company WHERE email = '$email'  ";
 
         $db = new Db();
         $result = $db -> Read_db($query);
 
        if ($result) {
           return $result;
        }else {
            return false;
        }
    }
public function Get_cp_dt($id)
{
    # code...
    $query = " SELECT * FROM company WHERE id = '$id'  ";
 
    $db = new Db();
    $result = $db -> Read_db($query);

   if ($result) {
      return $result;
   }else {
       return false;
   }
}
public function Up_cp($id, $data)
{
    # code... 
    $cp_description = $_POST['info'];
   $cp_pic = $_FILES['food_pic']['name'];
  $cp_pic_tmp = $_FILES['food_pic']['tmp_name'];

    move_uploaded_file($img_tmp,"/company_images/$img");
    $query = "UPDATE company SET about = '$cp_description', images ='$cp_pic', date=NOW() WHERE id = '$id' ";

    $d = new Db();
    $d -> Update_db($query);
}
}



?>