<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
            
        </script>
  <style>
/* body{
/* background-color: red; */
  }   */
  body {
    background-color: #111927;
    background-image: 
        radial-gradient(at 47% 33%, hsl(162.00, 77%, 40%) 0, transparent 59%), 
        radial-gradient(at 82% 65%, hsl(218.00, 39%, 11%) 0, transparent 55%);
}
  .card{
    backdrop-filter: blur(2px) saturate(180%);
    -webkit-backdrop-filter: blur(2px) saturate(180%);
    background-color: rgba(154, 166, 196, 0.06);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
  }
  </style>
  </head>
    
<body>
<section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="row">
      <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
<img src="./images/./forget pass.png" width="400" height="600" class="img-responsive">
</div>
<div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
        <div class="col-lg-12 col-xl-11">
          <div class="card">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="order-2 order-lg-1">
                  <h2 class="text-center  fw-bold mb-5 mx-1 mx-md-4 mt-4">RESET PASSWORD</h2>
                  <form class="mx-1 mx-md-4" action="forgetpassword.php" method="post">
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label">Your Email</label>
                          <input type="email" id="form3Example3c" class="form-control" name="uemail" placeholder="Existing email">
                          </div>
                          </div>
<div class="d-flex flex-row align-items-center mb-4">
    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
    <div class="form-outline flex-fill mb-0">
        <label class="form-label">Password</label>
      <input type="password" id="form3Example4c" class="form-control" name="newp" placeholder="New password">
      </div>
      </div>


<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
    <button type="submit" class="btn btn-primary btn-lg" name="RP">submit</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

</section>
</body>
</html> 



<?php
if(isset($_POST['RP'])){
$e=$_POST['uemail'];	
$np=$_POST['newp'];
$conn = mysqli_connect("localhost","root","","spicykitchen");
if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}

$sql = "SELECT * FROM admin;";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

	While($row=mysqli_fetch_array($result)){

	  $sql1="UPDATE admin SET password='$np' WHERE  email='$e';";	

      if($row['email']==$e){

    		if(mysqli_query($conn,$sql1)){
   
				  header("location:adminlogin.php");
          
	 		  }

			  else{

				  echo "Failed To Change Your Password";

			  }

     }

     
  }

}

}

?>