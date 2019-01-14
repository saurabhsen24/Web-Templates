<!DOCTYPE html>
<html>
<head>
<title>Display Form</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="table.css">
</head>

<body>

<div class="container">
<div class="col-lg-12">
<h1 class="text-danger text-center">Display Data</h1>
<table class="table table-striped table-hover table-bordered">
<tr class="text-center">
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Delete</th>
    <th>Update</th>
</tr>
<?php

include("db.php");
		
    $sql="select * from user";	
    $query=mysqli_query($con,$sql);
     
	while($res=mysqli_fetch_array($query)){ 
        
?>
<tr class="text-center">

    <td><?php echo $res['userId'] ?></td>
    <td><?php echo $res['username'] ?></td>
    <td><?php echo $res['password'] ?></td>
    <td><button class="btn btn-danger"><a style="color:#fff;" href="delete.php?id=<?php echo $res['userId']; ?>">Delete</a></button></td>
    <td><button class="btn btn-success"><a style="color:#fff;" href="update.php?id=<?php echo $res['userId']; ?>">Update</a></button></td>
</tr>

	<?php } ?>
</table>
</div>
</div>

</body>

</html>