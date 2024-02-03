<?php
if(isset($_POST['subup'])){
$n=$_POST['uname'];
$e=$_POST['uemail'];
$p=$_POST['upass'];
$ph=$_POST['uphone'];
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
$sql = "INSERT INTO admin(name,email,password,phone) VALUES('$n','$e','$p','$ph')";
if(mysqli_query($conn,$sql)){
	header("Location:./adminlogin.html");
}
else{
	echo "Error:".$sql."<br>".mysqli_error($conn);
}
}
?>