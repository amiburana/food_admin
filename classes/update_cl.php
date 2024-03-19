<?php
class Up 
{
  private $error;
  public function Up_data($id, $data)
  {
    # code...
    $food_name = $_POST['fname'];
    $food_info =  $_POST['info'];
    $img = $_FILES['food_pic']['name'];
    $img_tmp = $_FILES['food_pic']['tmp_name'];
    $food_price =  $_POST['price'];

    move_uploaded_file($img_tmp,"/blog_images/$img");
    $query = "UPDATE blog SET food_name = '$food_name', food_price = '$food_price', 
    food_description = '$food_info', images ='$img', date=NOW() WHERE id = '$id' ";

    $d = new Db();
    $d -> Update_db($query);
  }  
}


?>