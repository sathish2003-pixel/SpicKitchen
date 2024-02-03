<?php
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
if(isset($_POST['add'])){
  
$n=$_POST['name'];
$a=$_POST['amount'];


if(!empty($_FILES['image']['name'])){
 
  $image=basename($_FILES['image']['name']);
  $image_type=pathinfo($image,$pathinfo_extension);

  if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
  //  echo "hello";
$image=$_FILES['image']['tmp_name'];
$image=addslashes(file_get_contents($image));

$sql = "INSERT INTO cart(name,amount,image) VALUES('$n','$a','$image')";

 if(mysqli_query($conn,$sql)){

  header("location:menuout.php");

}
else{
  echo "not instered";
}
print_r($image);
  }

}

}
?>