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
</head>
<body>
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
$conn = mysqli_connect("localhost","root","","spicykitchen");
mysqli_select_db($conn,'spicykitchen');
$r='select * from  menu';
$re=mysqli_query($conn,$r);

while($row=mysqli_fetch_array($re)){
    ?>

    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['amount']?></td>
   <?php echo "<td><img src=data:image/jpg;charset=utf8;base64,".base64_encode($row['image'])." style=width:50px;height:50px;/>";?>
    <td><a href="menuupdate.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary btn-rounded mb-2">Update</button></a></td>
    <td><a href="menudelete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary btn-rounded mb-2">DELETE</button></a></td>

    
    <tr>
        <?php
}
    ?>
    <!-- <td><button class="btn btn-outline-warning mt-3" type="submit" name="edit"><a href="update.php?id=<?php echo $values['id'] ?>">EDIT</a></td>
    <td><button class="btn btn-outline-danger mt-3" type="submit" name="delete"><i class="bi bi-trash"></i>DELETE</td>
 -->
 </tbody>
</table>   
<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
<script src="./bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
</body>
</html>