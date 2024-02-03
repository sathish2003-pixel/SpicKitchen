
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
    .back{
        background: linear-gradient(rgba(15, 23, 43, .4), rgba(15, 23, 43, .4)), url(./images/body\ image.jpg);
  background-position: center;
    background-repeat:repeat;
    background-size:contain;
 
} 
.card {
            backdrop-filter: blur(5px) saturate(185%);
    -webkit-backdrop-filter: blur(5px) saturate(185%);
    background-color: rgba(1, 13, 41, 0.27);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
          }

</style>
</head>
<body>

<div class="container">

<?php

$conn = mysqli_connect("localhost","root","","spicykitchen");

mysqli_select_db($conn,'spicykitchen');
$r='select * from  menu';
print_r($r);
$re=mysqli_query($conn,$r);
 $row=mysqli_fetch_array($re);
  print_r($row['name']);
  foreach ($row as $key=>$val){
    echo($row['name'])."</br>";
  }
  
?>         

<div class="container-xxl py-5">
  <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
          <h1 class="mb-5">Most Popular Items</h1>
      </div>
      <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
          <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
              <li class="nav-item">
                  <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                      <i class="fa fa-coffee fa-2x text-primary"></i>
                      <div class="ps-3">
                          <small class="text-body">Popular</small>
                          <h6 class="mt-n1 mb-0">Breakfast</h6>
                      </div>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                      <i class="fa fa-hamburger fa-2x text-primary"></i>
                      <div class="ps-3">
                          <small class="text-body">Special</small>
                          <h6 class="mt-n1 mb-0">Launch</h6>
                      </div>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                      <i class="fa fa-utensils fa-2x text-primary"></i>
                      <div class="ps-3">
                          <small class="text-body">Lovely</small>
                          <h6 class="mt-n1 mb-0">Dinner</h6>
                      </div>
                  </a>
              </li>
          </ul>
          


    <div class="row">
<div class="col-xl-4 ">
<div class="card-columns-fluid">
    <div class="card  bg-light" style = "width: 22rem; " >
    <?php echo "<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:150px;height:150px;/>";?>
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $row['id']?></b></h5>
         <p class="card-text"><b><?php echo $row['name']?></b></p>
        <p class="card-text"><?php echo $row['amount']?></p>
        <a href="#" class="btn btn-secondary">Full Details</a>
     </div>
    </div>
  </div>
</div>
    </div> 
     </div> 
<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
