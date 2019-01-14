<?php
session_start();
include("database.php");
if(count($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['user'] = $_POST['username'];
	$sql="SELECT * FROM `login`";
	$q = mysqli_query($con,$sql);
	while($res=mysqli_fetch_array($q)){
		if($res['username']===$username and $res['password']===$password and $res['role'] === 'Admin'){
		    header("location:display.php");
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="addstyle.css">
</head>
<style>
.row.content{
	height:500px!important;
}
</style>
<body>
<section id="header">
<?php include("loginheader.php");  ?>
</section>

<section id="main">
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#" class="btn btn-success btn-block">DISPLAY</a></p>
      <p><a href="index.php" class="btn btn-info btn-block">DASHBOARD</a></p>
      <p><a href="#" class="btn btn-primary btn-block">HR DEPARTMENT</a></p>
      <p><a href="#" class="btn btn-warning btn-block">SALES DEPARTMENT</a></p>
      <p><a href="#" class="btn btn-success btn-block">MARKETING DEPARTMENT</a></p>
    </div>
	<div class="container-fluid">
    <div class="col-sm-8 text-left"> 
    <h1 class="text-white text-center marleft">ADMIN LOGIN</h1><br><br>
<form class="form-horizontal text-white" action="" method="post">

  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Username:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" id="username">
    </div>
  </div>   

  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd">
    </div>
  </div>
   
   <div class="form-group">
   <div class="col-xs-12 text-center">
    <div class="col-xs-6"> 
      <div class="col-sm-offset-7 col-sm-6">
         <button type="submit" class="btn btn-default">Admin Login</button>
      </div>
    </div>
    <div class="col-xs-6"> 
      <div class="col-sm-offset-3 col-sm-6">
         <a href="user_login.php" type="submit" class="btn btn-default">User Login</a>
      </div>
    </div>    
  </div> 
</div>
</form>
    </div>
    <div class="col-sm-2 pull-right sidenav">
      <div class="well">
        <img src="../image/forest.jpg" width="100%">
      </div>
      <div class="well">
       <img src="../image/lights.jpg" width="100%">
      </div>
      <div class="well">
       <img src="../image/nature.jpg" width="100%">
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
  $(document).ready(function(){
     $('h1').mouseenter(function(){
      $(this).animate({
        marginLeft:'100px'
      });
     });

     $('h1').mouseenter(function(){
      $(this).animate({
        marginLeft:'0px'
      });
     });     

     $('button,a').mouseenter(function(){
       $(this).animate({
        marginTop:'10px',
        fontSize : '2em'
      });
     });

     $('button,a').mouseleave(function(){
       $(this).animate({
        marginTop:'0px',
        fontSize : '1em'
      });
     });     
  });

</script>
</body>
</html>