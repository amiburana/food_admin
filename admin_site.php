<?php
@session_start();
include "classes/db.php";
include "classes/login.php";

$user = new Login();
$user_data = $user -> Check_Login($_SESSION['email']);
#$email  = $_SESSION['email'] ;
#$query = "SELECT * FROM users  ";
#$results_user = $user ->Read_db($query);

#$user_data = $results_user[0];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN_SITE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
   
<!--header-->
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
          <a class="nav-link text-white" href="#">Add</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
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
<div class="container">
  <div class="row">
   <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
    <div class="m-auto ">  
  <h4 style="text-align:center;">WELCOME <?php echo $user_data['first_name'] . " " . $user_data['last_name'];?></h4>
  <div class="col-sm-6-md-6 ">
    <img src="img/user.png" alt="" style="height:10%; width:10% ; margin:5px 0px 5px 300px;">
    </div>
    </div>
   </div>
  </div>

<!--cards-->

<div class="row">
  <div class="col-md-12 d-flex p-3 mb-3">
  <div class="card text-bg-primary mb-3 m-3" style="max-width: 18rem;">
  <div class="card-header"> 
    <a href="admin_site.php?blog" style = "text-decoration:none; color: white"> BLOG </a> </div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-bg-secondary mb-3 m-3 " style="max-width: 18rem;">
  <div class="card-header">
     <a href="admin_site.php?gallery" style = "text-decoration:none; color: white"> GALLERY</a></div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-bg-success mb-3 m-3" style="max-width: 18rem;">
  <div class="card-header">
    <a href="admin_site.php?company_info" style = "text-decoration:none; color: white"> COMPANY INFO</a></div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>
</div>

</div>
<div class="container my-5">
<?php
if (isset($_GET['blog'])) {
  # code...
  include "blog.php";
}
if (isset($_GET['gallery'])) {
  # code...
  include "gallery.php";
}
if (isset($_GET['company_info'])) {
  # code...
  include "company_info.php";
}

?>
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