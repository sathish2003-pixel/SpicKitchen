<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
if(isset($_POST['sub']))
{
$e=$_POST['user'];
$p=$_POST['pass'];
// Set session variables
$_SESSION["username"] = $e;
$_SESSION["password"] = $p;
 print_r($_SESSION);

}
?>
<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="#" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">User</label>
      <input type="text" class="form-control" id="email" placeholder="Enter user name" name="user">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
    <button type="submit" class="btn btn-primary" name="destroy">Sub</button>
  
  </form>
</div>
</body>
</html>
