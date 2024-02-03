<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* body{
background-color:black;
} */


.im{
width:275px;
height:300px;
}
/* .tab{
	border:20px;
	cursor:pointer;
}
.active{
	background-color:grey;
}
input[type=submit]
{
background-color:red;
height:40px;
width:100px;
} */
.navbar{

/* font-family: navbar; 
text-align: center;
 background:linear-gradient(to left, #e66465, #9198e5);  */
background-color: #15152d;
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
    border-bottom: solid 2px white;
    transform: scaleX(0);
    transition: transform 200ms ease-in-out;
}

.navbar li:hover:after {
    transform: scaleX(1);
    color:white;
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


</style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50"> 
  
  
  <!--nav bar started-->
   <div id="home">
     <nav class="navbar fixed-top navbar-expand-md navbar">
      <div class="container-fluid">
       <img src="images/dish.png" width="80px" height="80px" alt="logo" class="image-responsive"> 
    
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
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>
          </ul>
          <form class="d-flex">
            
            <button onclick="window.location.href='adminlogin.php';" class="btn btn-outline-warning" type="button"><i class="bi bi-person-circle"></i>Admin</button>
  
            <button onclick="window.location.href='booktable.php';" class="btn btn-outline-warning" type="button"><i class="bi bi-journal-medical"></i>Book Your Table</button>
          </form>
        </div>
        
      </div>
    </nav>
    
   </div>
    <br><br><br><br>
 


<?php

$conn= mysqli_connect("localhost","root","","spicykitchen");
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
$s="SELECT * from menu WHERE `category` = '$_GET[Cate]' ;";
$r=mysqli_query($conn,$s);


echo "<table align=center cellpadding=10  ><tr>";
$c=0;
if (mysqli_num_rows($r)> 0){
  while($row = mysqli_fetch_array($r)){

    if($c==4){
          echo "<tr>";
            $c=0;
  }
  echo "<td><table class='table table-dark' cellpadding='10' ></td>
		
		<td colspan=2><img class=im src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."'>
        <tr><td align=center colspan=2><i>".$row['name']."</i></td>
        <tr><td align=center><b>".$row['amount']."</b></td>
<tr><td  align=center><a href=desc.php?id=".$row['id'].">VIEW</a></tr></td>";

?>

</body>
<script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</table>

<?php
        
	
    $c=$c+1;
	}
}
else{
	header("location:kitchen2.html");
}

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html>