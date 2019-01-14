<?php
include("database.php");

$id=$_GET['id'];
$select_sql="SELECT * FROM `register` WHERE userId=$id";
$q=mysqli_query($con,$select_sql);
$res=mysqli_fetch_array($q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="addstyle.css" rel="stylesheet">
</head>
<style>
.row.content{height:790px;!important}

</style>
<section id="header">
<nav class="navbar">
<?php include("header.php");  ?>
</section>
<section id="main">
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav"><br><br><br>
      <p><a href="display.php" class="btn btn-success btn-block">DISPLAY</a></p><br>
      <p><a href="#" class="btn btn-info btn-block">DASHBOARD</a></p><br>
      <p><a href="#" class="btn btn-primary btn-block">HR DEPARTMENT</a></p><br>
      <p><a href="#" class="btn btn-warning btn-block">SALES DEPARTMENT</a></p><br>
      <p><a href="#" class="btn btn-success btn-block">MARKETING DEPARTMENT</a></p>
    </div>
	<div class="container-fluid">
    <div class="col-sm-8 text-left text-center"> 
	<br>
     <img src="../image/avatar2.png" class="img-circle text-center" alt="profile photo" width="10%"><br><br>	 
<form class="form-horizontal text-white" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" value="<?php echo $res['name']?>" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Username:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" value="<?php echo $res['username']?>" id="username" placeholder="Enter Username">
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-4" for="phone">Phone Number:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="phone" value="<?php echo $res['phone']?>" id="phone" placeholder="Enter Phone Number">
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" value="<?php echo $res['email']?>" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="gender">Gender:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="gender" value="<?php echo $res['gender']?>" id="gender" placeholder="Enter gender">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-4" for="school">School:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="school" value="<?php echo $res['School']?>" id="school" placeholder="Enter School">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-4" for="college">College:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="college" value="<?php echo $res['College']?>" id="college" placeholder="Enter College">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="bloodgrp">Blood Group:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="bloodgrp" value="<?php echo $res['bloodgrp']?>" id="bloodgrp" placeholder="Enter Blood Group">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="permanentAddress">Permanent Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="permanentAddress" value="<?php echo $res['permanentAddress']?>" id="permanentAddress" placeholder="Enter Permanent Address">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="localAddress">Local Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="localAddress" value="<?php echo $res['localAddress']?>" id="localAddress" placeholder="Enter Local Address">
    </div>
  </div>
</form>
    </div>
    <div class="col-sm-2 pull-right sidenav"><br><br><br>
      <div class="well">
        <img src="../image/forest.jpg" width="100%">
      </div><br>
      <div class="well">
       <img src="../image/lights.jpg" width="100%">
      </div><br>
      <div class="well">
       <img src="../image/nature.jpg" width="100%">
      </div><br>
      <div class="well">
       <img src="../image/s.jpg" width="100%">
      </div> 	  
    </div>
  </div>
</div>
</div>
</section>
<footer class="container-fluid text-center myfooter">
  <marquee>PROJECT MADE BY SAURABH AND SHIVAM</marquee>
</footer>


</body>
</html>
