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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
<style>
  .title{
    text-align: center;
  }
  .full{
    background-image:linear-gradient(#fdbb2d,#22c1c3);
  }
</style>
</head>
<body>
  
    <section class="full">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 title">USER SIGN UP</h3>
                  <form action="#" method="post">
                    
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <label class="form-label" for="emailAddress">Email</label>
                          <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"/>
                          
                        </div>
                        </div>
                      </div>



                        
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline  w-100">
                          <label for="birthdayDate" class="form-label">Password</label>
                          <input type="password" class="form-control form-control-lg" name="pass"/>
                        </div>
                      </div>
                  

                      
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-md" type="submit" value="Submit" name="sub"/>
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="./bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
// Set session variables


if(isset($_POST['sub']))
{

$e=$_POST['email'];
$p=$_POST['pass'];
// Set session variables

$_SESSION["name"] =$e;
$_SESSION["password"] =$p;

$con = mysqli_connect("localhost","root","","spicykitchen");

if (!$con) {

  die("Connection failed: " .$con->connect_error);
}

$sql = "SELECT * FROM user WHERE email='$e' and password='$p';";


$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_array($result)){

		if($row['email']==$e && $row['password']==$p){

			print_r($_SESSION["name"]);
      header("location:usermenuview.php");
		}

	 }

 }
	  else{
				echo "incorrect passsword";

  	    }

  }
  session_unset();

?>
