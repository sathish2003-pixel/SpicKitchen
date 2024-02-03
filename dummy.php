<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// Set session variables
$d=$_POST['dep'];
$c=$_POST['clg'];
$_SESSION["department"] = $d;
$_SESSION["college"] = $c;
?>
<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="#" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">colleger</label>
      <input type="text" class="form-control" id="email" placeholder="Enter user name" name="dep">
    </div>
    <div class="mb-3">
      <label for="pwd">department</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="clg">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
   
    <button type="submit" class="btn btn-primary" name="dest">Sub</button>
  </form>
</div>

<?php
if(isset($_POST['subup'])){
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed");
}
$sql = "INSERT INTO dummy(user,pass,dep,clg) VALUES('$_SESSION[username]','$_SESSION[password]','$d','$c')";
if(mysqli_query($conn,$sql)){
echo "inserted sucess";
}
else{
	echo "Error:".$sql."<br>".mysqli_error($conn);
}

}
session_destroy();
print_r($_SESSION);

?>

</body>
</html>
