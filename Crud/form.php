<?php

include("db.php");

if(count($_POST)>0){
		
	$username=$_POST['username'];
	$password=$_POST['password'];
    $sql="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";	
	mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Form</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="table.css">
<body>
<section id="header">
<div class="container">

<div class="panel">
<div class="panel panel-primary">
<div class="panel-heading ">
   <h1 class="text-center panel-primary">INSERT OPERATION</h1>
</div>

<div class="panel-body panel-primary"> 
<form method="post" class="form-horizontal" action="" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Username:</label>
    <div class="col-sm-10">
      <input type="text" name = "username" class="form-control" id="name" placeholder="Enter Name">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" name = "password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>

   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="done">Submit</button>
    </div>
  
</div>
</div>
</form>
</div>
</div>

</div>
</section>

</body>
</head>
</html>