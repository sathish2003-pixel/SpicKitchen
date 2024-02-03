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
body{
background-color:#0000;
}
ul {
  list-style-type: none;
  overflow: hidden;
 background-color:black;
  height:50px;
}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
table{
color:white;
font-style:oblique;
padding:15px 20px;
}
.im{
width:275px;
height:300px;
}
.tab{
	border:20px;
	cursor:pointer;
}
.active{
	background-color:grey;
}
input[type=submit]
{
background-color:white;
border-radius:20px;
height:40px;
width:110px;
}
.imgs{
color:white;
}
</style>
</head>
<body>

<ul >
  <li><a href="navbar.html">Home</a></li>
  <li><a class="active" href="category.php">Categories</a></li>
  <li><a href="branches.html">Branches</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="user.php">User Login</a></li>
  <li><a href="login.html">Admin</a></li>
  <li><a href="feedback.html">FeedBack</a></li>
</ul>
</body>

<?php

$conn= mysqli_connect("localhost","root","","spicykitchen");
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
$s="SELECT * from menu ;";
$r=mysqli_query($conn,$s);



  
if (mysqli_num_rows($r)> 0){

  while($row = mysqli_fetch_array($r)){
$c=urlencode($row['category']);
echo "<fieldset>";
         
  echo "<td><table align=center class=tab ></td>
		<td colspan=2><img class=im src='data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])."'>
        <tr><td align=center class=imgs ><a href=wc.php?Cate=".$c.">".$row['category']."</td></a> ";
?>
     </table>
     <script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</html>
<?php
	 echo "</fieldset>";
	}

}
else{
	header("location:kitchen2html");
}

?>

