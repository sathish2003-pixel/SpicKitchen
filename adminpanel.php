<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/1e5f4a2fd7.css" crossorigin="anonymous">  
  </head>
   <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 100vh;
  
}

body .container {
  padding-left: 550px;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

body .container .card {
  position: relative;
  width: 350px;
  height: 240px;
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
  justify-content: center;
  display: flex;
  
 
  background-color: #573057;
    background-image: 
        radial-gradient(at 47% 33%, hsl(240.00, 69%, 51%) 0, transparent 59%), 
        radial-gradient(at 82% 65%, hsl(66.84, 80%, 2%) 0, transparent 55%);
}



   




body .container .card .box {
  position:absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;

  backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(205, 212, 235, 0.75);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);

}

body .container .card .box:hover {
  transform: translateY(50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
}

body .container .card .box .content a {
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  background-color: yellowgreen;
  margin-top: 20px;
 
}


   </style>
   <body>
    <div class="container-fluid bg-info">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./images/admin.png" width="50px"height="50px">Welcome Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
          
          </ul>
      
           <a href="./adminsignup.html"> <button class="btn btn-outline-dark" type="submit"><i class="bi bi-person-fill-add"></i>ADD NEW ADMIN</button></a>
          
          
   







           
          <!-- </a> <a href="#"> <button class="btn btn-outline-dark" type="reset"><i class="bi bi-person-fill-add"></i>Logout</button></a>
        -->
        </div>
      </div>
    </nav>
</div>













    <div class="container-fluid ">
    <div class="container">
      <div class="card">
        <div class="box">
          <div class="content">
            
            <h3>MENU</h3>
           
           
            <a href="./menuout.php">View</a>
          </div>
        </div>
      </div>
    
      <div class="card">
        <div class="box">
          <div class="content">
           
            <h3>USER LOGIN</h3>
           
            <a href="./usertableout.php">View</a>
          </div>
        </div>
      </div>
    
      <div class="card">
        <div class="box">
          <div class="content">
          
            <h3>RESERVATION</h3>
           
            <a href="./usertablereserve.php">View</a>
          </div>
        </div>
      </div>




      
    

   

    
    </div>

  </div>





<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/1e5f4a2fd7.js" crossorigin="anonymous"></script>

</body>
</html>