<?php
session_start();
$conn = mysqli_connect("localhost","root","","spicykitchen");

if(isset($_GET['id'])){
    echo "hai";
	if(!isset($_SESSION['userid'])){
        echo "hii";
       $i=$_SESSION['userid'];
      $id= $_GET['id'];
      $s="select * from menu where id='$id';";
       $q=mysqli_query($conn,$s);
       while($row=mysqli_fetch_array($q)){
           $pri=$row['amount'];
       }
       $q=1;
       $in="insert into cart(id,userid,unit,price)values('$id','$i','$q','$pri');";
       $int=mysqli_query($conn,$in);
       echo mysqli_error($conn);
       if($int){
        echo "succsuccfllkdf";
       }
    }
}

       ?>
