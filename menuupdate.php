<?php

$id=$_GET['id'];
$sqll="select * from menu where id='$id'";
$conn = mysqli_connect("localhost","root","","spicykitchen");
$val=mysqli_query($conn,$sqll);
$row=mysqli_fetch_array($val);
// print_r($row['image']);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">


<style>.intro {
  height: 100%;
}

@media (min-height: 300px) and (max-height: 450px) {
  .intro {
    height: auto;
  }
}
.card { backdrop-filter: blur(3px) saturate(98%);
    -webkit-backdrop-filter: blur(3px) saturate(98%);
    background-color: rgba(5, 57, 214, 0.14);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
          }
          .page{
            background: linear-gradient(rgba(15, 23, 43, .6), rgba(15, 23, 43, .6)), url(./images/body\ image.jpg);
  background-position: center;
    background-repeat:repeat;
    background-size: cover;
          }
          .btn{
            color:aliceblue;

          }
</style>
<body>
  <div class="page">
  <section class="intro">
  <div class="mask d-flex align-items-center h-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="my-md-5 pb-5">

                <h1 class="fw-bold mb-0 text-warning">Let's Update</h1>

                <i class="fas fa-user-astronaut fa-3x my-5"></i>

                <form action="#"method="POST"  enctype="multipart/form-data">
                 <div class="form-outline mb-4">
                 <label class="form-label text-light">Name</label>
                 <input type="text" id="firstName" class="form-control form-control-lg" name="name" value="<?php echo $row['name']?>"/>
                </div>

                
                <div class="form-outline mb-5">
                <label class="form-label text-light">Amount</label>
        <input type="number" id="firstName" class="form-control form-control-lg" name="amount" value="<?php echo $row['amount'];?>" />
                  
                </div> 

                
                <div class="form-outline mb-5">
                <input type="file" id="firstName" class="form-control form-control-lg" name="image" />
                </div>

                
	            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-outline-info btn-sm btn-rounded  px-5" name="RP">Update</button>
              </div>
        </form>

          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
<!--  -->




<?php
if(isset($_POST['RP'])){
  $n=$_POST['name'];
  $a=$_POST['amount'];
  // print_r($_POST);
  

   
    $image=basename($_FILES['image']['name']);
    $image_type=pathinfo($image,$pathinfo_extension);
  
    if($image_type=='jpg' or $image_type=='png' or $image_type='jpeg' or $image_type='gif'){
    //  echo "hello";
  $image=$_FILES['image']['tmp_name'];
  $image=addslashes(file_get_contents($image));
// print_r($_POST['name']);
// print_r($_POST['amount']);
// echo $image;

  
  $sql1="UPDATE menu SET name='$n',amount='$a', image = '$image'  WHERE id='$id'";	
  // echo $sql1;
  
   if(mysqli_query($conn,$sql1)){
  
    header("location:menuout.php");
  
  }
  else{
    echo "failed";
  }
  // print_r($image);
    }
  
  }
// $i=$_POST['id'];

if (!$conn) {
  die("Connection failed: " . '$conn->connect_error');
}
?>
