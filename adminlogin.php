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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        
    </script>

    <style>
        /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(rgba(15, 23, 43, .4), rgba(15, 23, 43, .4)), url(../ADMIN/images/./pexels-igor-starkov-1055058.jpg);
  background-position: center;
    background-repeat:repeat;
    background-size: cover;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 80px 30px;
   
    backdrop-filter: blur(4px) saturate(180%);
    -webkit-backdrop-filter: blur(2px) saturate(180%);
    background-color: rgba(154, 166, 196, 0.06);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
   
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
}

.wrapper .name {
    font-weight: 600;
    font-size: 2.4rem;
    letter-spacing: 0.5px;
    text-align: center;
    color: #555;
    margin-bottom: 40px;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 40px;
    border-radius: 20px;
    box-shadow: inset 4px 4px 4px , inset -4px -4px 4px;
}

.wrapper .form-field .fas {

    color: #555;
}

.wrapper .btn {
    box-shadow:#666;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 15px;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color:#5f5f5f;
}

.wrapper a {
    text-decoration:wavy;
    font-size: 0.8rem;
    color: aliceblue;
}


.line{
    /* padding-left: 50px; */
    color:aliceblue;
    padding:20px;
}

</style>

</head>
<body>
   



    <div class="wrapper">
        <div class="logo">
            <img src="./images/admin.png" alt="admin">
        </div>
        <div class="text-center mt-4 name text-light">
            ADMIN
        </div>

        <form class="p-3 mt-3" action="" method="post">
             <div class="form-field align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uemail"  placeholder="Username"class="text text-light">
            </div>

            <div class="form-field  align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="upass" placeholder="Password" class="text text-light">
            </div>
            <button class="btn mt-3" name="sub">Sign in</button>
        </form>
            <div class="line">
            <a href="./forgetpassword.php">Forget password?</a> or <a href="./adminsignup.html">Sign up</a>
                </div>
    </div>  
</body>
</html>
<?php
// Set session variables


if(isset($_POST['sub']))
{

$e=$_POST['uemail'];
$p=$_POST['upass'];
// Set session variables
$_SESSION["name"] =$e;
$_SESSION["password"] =$p;
print_r($_SESSION);

$con = mysqli_connect("localhost","root","","spicykitchen");

if (!$con) {

  die("Connection failed: " .$con->connect_error);
}

$sql = "SELECT * FROM admin WHERE email='$e' and password='$p';";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_array($result)){

		if($row['email']==$e && $row['password']==$p){

			header("location:adminpanel.php");

		}

	 }

 }
	  else{
				echo "incorrect passsword";

  	    }

  }

?>
