<?php

include("database.php");
if(count($_POST)>0){
	
	    $id=$_GET['id'];
		$ename=$_POST['ename'];
		$esal=$_POST['esal'];
		$email=$_POST['email'];
		$sql="UPDATE `employee` SET `ename`='$ename',`esal`=$esal,`email`='$email' WHERE empId=$id";
		mysqli_query($con,$sql);
		header("location:display.php");
}

        $id=$_GET['id'];
		$sql_select="select * from employee where empId=$id";
	    $query=mysqli_query($con,$sql_select);
		$res=mysqli_fetch_array($query);
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
<body>
<section id="header">
<nav class="navbar">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>	
      <a class="navbar-brand" href="#"><b>BR</b>Architects</a>
    </div>
 <div class="collapse navbar-collapse" id="myNavbar">	
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#project">Projects</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#">Contents</a></li>
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
 </div>
</nav>
</nav>
</section>