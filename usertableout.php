<?php
$con=mysqli_connect("localhost","root","","spicykitchen");
$r="SELECT * FROM user";
$re=mysqli_query($con,$r);
?>
<html>
	<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        
        
		<title>User Information</title>
		<style>
			table, th, td {
               border: 1px solid white;
               border-collapse: collapse;
               text-align: center;
               margin-top: 50px;
			   color: black;
             }
    
             body{
               background-color:deepskyblue;
  }       
   
         </style> 
	</head>
	
<body>
	<h1 style="margin-top: 100px;">Customer Information</h1> 
<center><table  class="table table-hover" style=width:1000px;height:200px>
	<tr class="text-light">
        <th>Id</th>
		<th>Name</th>
		<th>Email</th>
	
		<th>Phone</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($re)){
		echo "<tr>";
        echo "<td>".$row['userid'];
		echo "<td>".$row['name'];
		echo "<td>".$row['email'];
	
		echo "<td>".$row['phone'];
		echo "</tr>";
	}
?>
</table>
</center>

</body>
</html>
