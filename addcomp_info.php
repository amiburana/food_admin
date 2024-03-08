<?php
include "classes/db.php";
include "classes/company_cl.php";
include "classes/login.php";


$cp_description = "";
$cp_pic = "";

 # calling class to check login and to pass session data
 #$user = new Login();
 #$user_data = $user -> Check_Login($_SESSION['email']);
if (isset($_GET['user_data'])) {
  # code...
  $email = $_GET['user_data'];
  #echo $email;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    #evaluate data
      $comp = new Company();
     
      $results = $comp -> Evaluate($_POST, $email);
     
    
      if ($results != "") {
        # if there are errors
        echo "<div style='text-align:center; font-size:12px; color:white; background-color:grey;'>";
       echo "<br>The following errors occured:<br><br>";
       echo $results;
       echo "</div>";
      }else {
        # if there are no errors
        header("location:admin_site.php");
        die;
    }


    $cp_description = $_POST['info'];
    $cp_pic = $_FILES['food_pic']['name'];
    $cp_pic_tmp = $_FILES['food_pic']['tmp_name'];

}

}





?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD_BLOG_INFO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!-- header starts-->
    <nav class="navbar navbar-expand-lg bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">FOOD admin site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav justify-content-end">
       
        <li class="nav-item ">
          <a class="nav-link text-white " href="register_admin.php">Register</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>


<div style="margin:100px;  background-color:#f0f0f0;">
<form action="" method="post" enctype="multipart/form-data" style="padding:30px 50px 40px 100px; margin:aouto;">
<h4 style="text-decoration:underline; text-align:center;">Please fill the form</h4>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">About</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
</div>
<div class="mb-3">
<input type="file" name="food_pic" id="">
</div>
<div class="mb-3" style="margin:20px 0px 0px 0px;">
  <input type="submit"  class="form-control w-25 bg-success b-0 "   value="submit">
</div>

</form>
</div>

<!-- text area
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>-->

   



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
  
</html>