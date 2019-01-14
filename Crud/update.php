<?php

include("db.php");
	if(count($_POST)>0) {
    $id=$_GET['id'];	
	$username=$_POST['username'];
	$password=$_POST['password'];
    $sql="update user set userId='$id' ,username='$username',password='$password' where userId='$id'";
	mysqli_query($con,$sql);
	}
	//header("location:table.php");
	 $id=$_GET['id'];
   $select_query="SELECT * from user where userId=$id";
   print_r($select_query);
   $query = mysqli_query($con,$select_query);
   $res=mysqli_fetch_array($query);
   //echo ($res['username']);
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Update User Form</title>
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
   <h1 class="text-center panel-primary">UPDATE OPERATION</h1>
</div>

<div class="panel-body panel-primary"> 
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Username:</label>
    <div class="col-sm-10">
      <input type="text" name = "username" class="form-control" id="name" value = "<?php echo $res['username']; ?>" placeholder="Enter Name">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="text" name = "password" class="form-control" id="pwd" value = "<?php  echo $res['password'] ?>" placeholder="Enter password">
    </div>
  </div>

  <div class="col-md-12">
    <div class="container text-center">
    <div class="col-sm-6 col-xs-6">
	     <button class="btn btn-success">submit</button>
    </div>
	<div class="col-sm-6 col-xs-6">
	     <a href="table.php" class="btn btn-danger">Display</a>
	</div>
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
