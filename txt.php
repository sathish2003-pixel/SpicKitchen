
<?php

$con=mysqli_connect("localhost","root","","spicykitchen");
Mysqli_select_db($con,'spicykitchen');
$r='select * from menu;';
    $re=mysqli_query($con,$r);
   
    while($row=mysqli_fetch_array($re)){
        $img=($row['image']);

        echo '<img src="data:image/jpg;base64,'.base64_encode($img).'"/>';




        // $encoded_image = base64_encode($row['image']);
        //You dont need to decode it again.
        
        // $Hinh = "<img src='data:image/jpg;base64,{$encoded_image}'>";
        
        // //and you echo $Hinh
        // echo" $Hinh";
    
       
    //  Echo "<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." width=100% height='150px auto' alt='No Image'>";
    //       echo "<h4>".$row['name'];
    //      echo "<h4>".$row['amount'];
         


    // print_r($row);
    }
      ?> 



       