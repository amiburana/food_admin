<?php
include "classes/db.php";
include "classes/register.php";

$fname = "";
$lname = "";
$gender = "";
$email = "";
$phone = "";
$pwd1 = "";
$pwd2 = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  # code...
  $register = new Register();
  $result = $register -> Evaluate_data($_POST);
  
  if ($result != "") {
    # code...
   echo "<div style='text-align:center; font-size:12px; color:white; background-color:grey;'>";
   echo "<br>The following errors occured:<br><br>";
   echo $result;
   echo "</div>";
}else
{
  header("Location:admin_login.php");
  die;

}
$fname =$_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRATION FORM</title>
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
          <a class="nav-link text-white " href="#">Login</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
<!--
   another header
  <nav class="navbar navbar-expand-lg bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">FOOD admin site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
-->

<div style="margin:100px;  background-color:#f0f0f0;">
<form action="" method="post" style="padding:30px 50px 40px 100px; margin:aouto;">
<h4 style="text-decoration:underline;">FILL THE FORM TO REGISTER</h4>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label ">First Name</label>
  <input type="text" name="fname" class="form-control w-50" id="exampleFormControlInput1" placeholder="Please Enter Your Fist Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label ">Last Name</label>
  <input type="text" name="lname" class="form-control w-50" id="exampleFormControlInput1" placeholder="Please Enter Your Last Name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label ">Email address</label>
  <input type="email" name="email" class="form-control w-50" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label ">Phone Number</label>
  <input type="tel" name="phone" class="form-control w-50" id="exampleFormControlInput1" placeholder="+255 000 000 000">
</div>
<select class="form-select w-50" aria-label="Default select example" name= "gender">
  <option selected>Gender</option>
  <option >Male</option>
  <option >Female</option>
 
</select>
<label for="inputPassword5" class="form-label">Password</label>
<input type="password" name="pwd1" id="inputPassword5" class="form-control w-50 " aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
<label for="inputPassword5" class="form-label">Repeate Password</label>
<input type="password" name="pwd2" id="inputPassword5" class="form-control w-50 " aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
<div class="mb-3" style="margin:20px 0px 0px 0px;">
  <input type="submit"  class="form-control w-25 bg-success b-0 "   value="Register">
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