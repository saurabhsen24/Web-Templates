<?php

include("session.php");

if(!isset($_SESSION['user'])){
  header("location:login.php");	
}

include("database.php");
if(count($_POST)){  
	if(isset($_POST)){
	   $name=$_POST['name'];
	   $username=$_POST['username'];
	   $phone=$_POST['phone'];
	   $email=$_POST['email'];
	   $password=$_POST['password'];
	   $gender=$_POST['gender'];
	   $school=$_POST['school'];
	   $college=$_POST['college'];
	   $bloodgrp=$_POST['bloodgrp'];
	   $permanenetAddress=$_POST['permanenetAddress'];
	   $localAddress=$_POST['localAddress'];
	   $hometown=$_POST['hometown'];
	
	   $sql="INSERT INTO `register`(`name`, `username`, `phone`, `email`, `password`, `gender`, `School`, `College`, `bloodgrp`, `permanentAddress`, `localAddress`, `hometown`) VALUES ('$name','$username',$phone,'$email','$password','$gender','$school','$college','$bloodgrp','$permanenetAddress','$localAddress','$hometown')";
	   mysqli_query($con,$sql);
	   header("location:display.php");
	}
}

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
.row.content{height:700px;!important}
</style>
<body>
<section id="header">
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
      <p><a href="#" class="btn btn-success btn-block">MARKETING DEPARTMENT</a></p><br>
    </div>
	<div class="container-fluid">
    <div class="col-sm-8 text-left"> 
      <h1 class="text-center">ADD FORM</h1>
<form class="form-horizontal text-white" action="" method="post" name="myform">
  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Name:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Username:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-4" for="phone">Phone Number:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
    </div>
  </div>  
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password"  id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="school">School:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="school" id="school" placeholder="Enter School">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-4" for="college">College:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="college" id="college" placeholder="Enter College">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-4" for="bloodgrp">Blood Group:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="bloodgrp" id="bloodgrp" placeholder="Enter Blood Group">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-4" for="permanenetAddress">Permanent Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="permanenetAddress" id="permanenetAddress" placeholder="Enter Permanent Address">
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-4" for="localAddress">Local Address:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="localAddress" id="localAddress" placeholder="Enter Local Address">
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-4" for="hometown">Hometown:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="hometown" id="hometown" placeholder="Enter Hometown">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Choose your gender:</label>
    <div class="col-sm-8"> 
      <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">
    </div>
  </div>
  


  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default" onclick=" return validateform()">Submit</button>
    </div>
  </div>
</form>	  

    </div>
    <div class="col-sm-2 pull-right sidenav"><br><br>
      <div class="well">
        <img src="../image/forest.jpg" width="100%">
      </div>
      <div class="well">
       <img src="../image/lights.jpg" width="100%">
      </div>
      <div class="well">
       <img src="../image/nature.jpg" width="100%">
      </div> 
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
<script type="text/javascript">
  function validateform() {
    if(document.myform.name.value === ""){
      alert('Please Enter your name');
      return false;
    }

    if(document.myform.username.value === ""){
      alert('Please Enter your user name');
      return false;
    }

    if(document.myform.phone.value === ""){
      alert('Please Enter your phone');
      return false;
    }

    if(document.myform.phone.value !== ""){
      var phone = document.myform.phone.value;
      if(isNaN(phone)){
        alert("Please enter digits...");
        return false;
      }

      if(phone.length < 10){
        alert("Mobile number should be 10 digits");
        return false;
      }

      if(phone.length > 10){
        alert("Mobile number should be 10 digits");
        return false;
      }

      if((phone.charAt(0)!=9) && (phone.charAt(0)!=8) && (phone.charAt(0)!=7)){
        alert("Mobile number must start with 9,8 or 7");
        return false;
      }
    }

    if(document.myform.email.value === ""){
      alert('Please Enter your email');
      return false;
    } 

    if(document.myform.email.value !== ""){
      var e = document.myform.email.value;
      
      if(e.indexOf('@')<=0){
        alert('Please enter a valid email');
        return false;
      }

      if((e.indexOf('.') != e.length-4) && (e.indexOf('.') != e.length-3)){
        alert("Please enter a valid email Id");
        return false;
      }

    }

    if(document.myform.password.value === ""){
      alert('Please Enter your password');
      return false;
    }    

    if(document.myform.school.value === ""){
      alert('Please Enter your school');
      return false;
    } 

    if(document.myform.college.value === ""){
      alert('Please Enter your college');
      return false;
    } 


    if(document.myform.bloodgrp.value === ""){
      alert('Please Enter your blood group');
      return false;
    }  

    if(document.myform.permanenetAddress.value === ""){
      alert('Please Enter your permanenetAddress');
      return false;
    }                 

    if(document.myform.localAddress.value === ""){
      alert('Please Enter your localAddress');
      return false;
    } 

    return true;
  }
</script>
</body>
</html>
