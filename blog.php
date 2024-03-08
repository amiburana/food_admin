<?php
@session_start();
#include "classes/db.php";
#include_once "classes/db.php";         
include "classes/blog_info_cl.php";
#include "classes/login.php";
#include_once "classes/login.php";

$user = new Login();
$user_data = $user -> Check_Login($_SESSION['email']);

#retrieving blog data
$user = new Blog();
$email = $user_data['email'];
$user_blog = $user -> Get_blog($email);
#print_r($user_blog);
#echo $email;
             
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN_SITE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
<!-- font -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
 <div class="container ">
 <div class='row'>

<?php

echo "
<div class='button' >
<button class='my-3 bg-danger' style='border-radius:0px;'  >
<a href='blog_info.php?user_data=$email'  class='nav-link  text-light my-1'>
Add Blog Information</a>
</button>
</div>
"  ;
#<!-- card -->
if ($user_blog) {
  # code...
  foreach ($user_blog as $row) {
    $food_name = $row['food_name'];
    $food_info = $row['food_description'];
    $img = $row['images'];
    $id = $row['id'];
    $food_price = $row['food_price'];
    # code...
    echo"
    
    <div class='col-md-4 mb-3'>
    <div class='card mb-3  ' style='width: 18rem;'>
  <img src='blog_images/$img' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'> $food_name </h5>
    <h5 class='card-title'> $food_price-Tshs </h5>
    <p class='card-text'>$food_info</p>
   <a href='update.php?update_id=$id&user_data=$email' class='card-link'> <i class='bi bi-trash3'></i>Update</a>
    <a href='delete.php?delete_id=$id&user_data=$email' class='card-link'>Delete</a>
  </div>
</div>

</div>";
  }
}else {
  echo"can not retrieve data";
}



?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
 
</body>
</html>