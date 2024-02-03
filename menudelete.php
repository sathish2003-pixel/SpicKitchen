<?php
$id=$_GET['id'];
$sqll="select * from menu where id='$id'";
$conn = mysqli_connect("localhost","root","","spicykitchen");
$val=mysqli_query($conn,$sqll);
$row=mysqli_fetch_array($val);
// print_r($row['image']);
if(isset($_POST['del'])){
  $n=$_POST['name'];
  $a=$_POST['amount'];
  // print_r($_POST);
  //   $image=basename($_FILES['image']['name']);
  //   $image_type=pathinfo($image,$pathinfo_extension);
  
  //   if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
  //   //  echo "hello";
  // $image=$_FILES['image']['tmp_name'];
  // $image=addslashes(file_get_contents($image));
// print_r($_POST['name']);
// print_r($_POST['amount']);
// echo $image;

  
  $sql1="DELETE  from menu  WHERE id='$id'";	
  print_r($sql1);
  // echo $sql1;
  
   if(mysqli_query($conn,$sql1)){
  
    header("location:adminpanel.html");
  
  }
  else{
    echo "failed";
  }
  // print_r($image);
    }
  
  
// $i=$_POST['id'];

if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}
?>
