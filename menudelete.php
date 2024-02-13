<?php

$id=$_GET['id'];
$sqll="SELECT * from menu where id='$id'";

// Create connection
$conn = mysqli_connect("localhost","root","", "spicykitchen");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM menu WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header("location:menuout.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


