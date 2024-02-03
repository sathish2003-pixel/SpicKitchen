<?php
$con=mysqli_connect("localhost","root","","spicykitchen");
$r="SELECT * FROM cart";
$re=mysqli_query($con,$r);
?>
<html>
<head>
		<link rel="stylesheet" href="./bootstrap-5.2.3-dist-20230125T072812Z-001/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/css/bootstrap.min.css">
		<title>Available Dishes</title>
		<style>
			table, th, td {
               border: 1px solid white;
               border-collapse: collapse;
               text-align: center;
               margin-top: 40px;
             }
             
         </style> 
	</head>
	<body style="background-color:red;">
	<h1 style="margin-top: 30px;"><bold>Selected Dishes</h1>
<center>
<table style=width:800px;height:600px>
	    <tr>
	    	<th>Dish Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Edit</th>
			<th>Update</th>
		</tr>
		<?php
		$t=0;
		while($row=mysqli_fetch_array($re)){
			echo "<tr>";
			echo "<td>".$row['dname'];
			echo "<td>".$row['quantity'];
			echo "<td>".$row['quantity']*$row['price']; 
			$t+=$row['quantity']*$row['price']; ?>
			<td><a href="cartremove.php?id=<?php echo $row['id']?>"><button class="btn btn-light">Remove</button></a></td>
			<td><a href="cartupdate.php?id=<?php echo $row['id']?>"><button class="btn btn-light">Update Quantity</button></a></td>
			<?php
		}
			echo "<tr><td colspan=15 align center>Total Price=".$t."<br><br>";
		?>
			<a href="cartupdate.php?id=<?php echo $row['id']?>"><button class="btn btn-warning">Confirm Order</button></a>
</table>
</center>
<script src="./bootstrap-5.2.3-dist-20230125T072812Z-001/bootstrap-5.2.3-dist/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>
</html>