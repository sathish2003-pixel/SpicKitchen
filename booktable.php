<?php
if(isset($_POST['submit'])){
$n=$_POST['name'];
$p=$_POST['phone'];
$e=$_POST['email'];
$d=$_POST['date'];
$m=$_POST['members'];
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
$sql = "INSERT INTO reservation(rname,rphone,remail,rdate,rmembers) VALUES('$n','$p','$e','$d','$m')";
if(mysqli_query($conn,$sql)){
  header("location:kitchen2.html");
}

else{
	echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@800&family=Inter&family=Kaushan+Script&family=Merienda:wght@400;700&family=Oswald:wght@600&family=Poppins:wght@300&family=Roboto+Condensed:wght@300&family=Signika:wght@300;500&family=Tajawal&family=Teko:wght@300&display=swap" rel="stylesheet">
      
 
 <style>
 
/**nav bar style*/
.navbar{
/* 
font-family: navbar; */
text-align: center;
/* background:linear-gradient(to left, #e66465, #9198e5); */
background-color: #3B185F;
}



.navbar li a {
    margin: auto;
    font-size: 20px;
    cursor: pointer;
    color:yellow;
}

.navbar li:after {
    display: block;
    content: '';
    border-bottom: solid 2px black;
    transform: scaleX(0);
    transition: transform 200ms ease-in-out;
}

.navbar li:hover:after {
    transform: scaleX(1);
}

/* navbar button */
.btn{
  color:white;
  margin: 4px;
  display: inline-block;
  transition: all 0.5s ease-in-out;
}
.btn:hover{
  transition: all 0.2s ease-in-out;
}
.navlink{
  color:#52E1E2;
}
.page{
  background: linear-gradient(rgba(15, 23, 43, .4), rgba(15, 23, 43, .4)), url(../ADMIN/images/./pexels-igor-starkov-1055058.jpg);
  background-position: center;
    background-repeat:repeat;
    background-size: cover;
} 
.card{
  backdrop-filter: blur(5px) saturate(185%);
    -webkit-backdrop-filter: blur(5px) saturate(185%);
    background-color: rgba(1, 13, 41, 0.27);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    size: 50px;
}

Predloader
   </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50"> 
  
  
  <!--nav bar started-->
  
  <nav class="navbar fixed-top navbar-expand-md navbar">
    <div class="container-fluid">
     <img src="images/logo 3.png" width="80px" height="80px" alt="logo" class="image-responsive"> 
  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link " href="#home" style="color:yellow ! important;">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.html">MENU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
          </li>
        </ul>
        <form class="d-flex">
          
          <button onclick="window.location.href='adminlogin.php';" class="btn btn-outline-warning" type="button"><i class="bi bi-person-circle"></i>Admin</button>

          </form>
      </div>
      
    </div>
  </nav>
  
<div class="page">
<section class="intro">
  <div class="mask d-flex align-items-center h-50">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="my-md-5">

                <h1 class="fw-bold mb-0 text-warning">Book the table</h1>

                <i class="fas fa-user-astronaut fa-3x my-5"></i>

       <form action="#" method="post">
        <div class="row">
        <div class="col-6">
	   <div class="form-outline mb-4">
                 <label class="form-label text-light">Name</label>
                 <input type="text" id="firstName" class="form-control form-control-lg" name="name">
                </div>
        </div>
        <div class="col-6">
				<div class="form-outline mb-4">
                 <label class="form-label text-light">Phone no</label>
                 <input type="text" id="firstName" class="form-control form-control-lg" name="phone">
                </div>
        </div>
        </div>
				<div class="form-outline mb-4">
                 <label class="form-label text-light">Email</label>
                 <input type="email" id="firstName" class="form-control form-control-lg" name="email">
                </div>

				<div class="form-outline mb-4">
                 <label class="form-label text-light">Date and time</label>
                 <input type="date" id="firstName" class="form-control form-control-lg" name="date">
                </div>

				<div class="form-outline mb-4">
                 <label class="form-label text-dark">No of members</label>
                 <input type="number" id="firstName" class="form-control form-control-lg" name="members">
                </div>


	            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-outline-info btn-sm btn-rounded  px-5" name="submit">Book now</button>
              </div>

                
        </form>

          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
      </div>
      </div>
    </div>
</div>
</div>












<script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>
</html>