<?php
$con=mysqli_connect("localhost","root","","spicykitchen");
$r="SELECT * FROM reservation";
$re=mysqli_query($con,$r);
?>
<html>
	<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../ADMIN/bootstrap-5.2.2-dist/css/bootstrap.min.css"
        
        
		<title></title>
        <style>
			table, th, td {
               border: 1px solid white;
               border-collapse: collapse;
               text-align: center;
               margin-top: 50px;
             }
    
             body{
                background-color: black;
                color: white;
  }       
   
         </style> 
	</head>
	
<body>
	<h1 style="margin-top: 100px;">Customer Information</h1> 
<center><table  class="table table-" style=width:1000px;height:200px>
	<tr class="table table-dark text-light">
        <th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Date</th>
		<th>Members</th>
	
	</tr>
	<?php
	while($row=mysqli_fetch_array($re)){
		echo "<tr class='text-light'>";
        echo "<td>".$row['rname'];
		echo "<td>".$row['rphone'];
		echo "<td>".$row['remail'];
		echo "<td>".$row['rdate'];
		echo "<td>".$row['rmembers'];
		echo "</tr>";
	}
?>
</table>
</center>

</body>
</html>
