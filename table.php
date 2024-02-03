<?php
$con=mysqli_connect("localhost","root","","spicykitchen");
Mysqli_select_db($con,'spicykitchen');
$r='select * from admin;';
               $re=mysqli_query($con,$r);
               
  ?>            <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th>Firstname</th>
      <th>Email</th>
      <th>Password</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>    
            <?php
               while($row=mysqli_fetch_array($re)){
                    echo "<tr><td>".$row['name'];
                    echo "<td>".$row['email'];
                    echo "<td>".$row['password'];
                    echo "<td>".$row['phone'];
               
               
                 
                  }
                 ?> 
    
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    

</head>
<body>

</body>
</html>