<?php

include("database.php");

		$ename=$_POST['ename'];
		$esal=$_POST['esal'];
		$email=$_POST['email'];
		$sql="INSERT INTO `employee`(`ename`, `esal`, `email`) VALUES ('$ename',$esal,'$email')";
		print_r($sql);
		mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

</style>
<body>
<div class="container">
<div class="panel panel-primary">
<div class="panel-heading text-center"><h1>Employee Form</h1></div>
<br><br>
<form method="post" class="form-horizontal" action="">
  <div class="form-group">
    <label class="control-label col-sm-2" for="ename">Employee Name:</label>
    <div class="col-sm-10">
      <input type="text" name="ename" class="form-control" id="ename" placeholder="Enter employee name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="esal">Employee Salary:</label>
    <div class="col-sm-10"> 
      <input type="text" name="esal" class="form-control" id="esal" placeholder="Enter salary">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Employee Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>