<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<section id="header">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid bg-white">
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
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
 </div>
</nav>
</section>

<section id="main">
<h1 class="mytext"><span class="w3-black"><b>BR</b></span><span class="w3-white">Architect</span></h1>
</section>

<section id="project">
<div class="container-fluid">
<h3>Projects</h3>
<hr>

<div class="col-md-3">
   <div class="pic-com p1">
      <div class="mybg">
        <h4>Summer house</h4>
      </div>
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com p2">
       <div class="mybg">
         <h4>Brick house</h4>
	   </div> 
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com p3">
     <div class="mybg">
       <h4>Renovated</h4>
     </div>
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com  p4">
      <div class="mybg">
       <h4>Barn house</h4>
	  </div> 
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com p1">
      <div class="mybg">
        <h4>Summer house</h4>
      </div>
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com p2">
       <div class="mybg">
         <h4>Brick house</h4>
	   </div> 
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com p3">
     <div class="mybg">
       <h4>Renovated</h4>
     </div>
   </div>
</div>
<div class="col-md-3">
   <div class="pic-com  p4">
      <div class="mybg">
       <h4>Barn house</h4>
	  </div> 
   </div>
</div>
</div>
</section>

<section id="about">
<div class="container-fluid">
<h3>About</h3>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div><br><br>
<div class="col-xs-12 text-center">
<div class="col-sm-3">
      <div class="thumbnail">
        <img src="../image/team1.jpg" alt="Paris">
        <h4 class="text-left">John Deo</h4>
		<h4 class="text-left" style="color:#ccc;font-size:1em">CEO & Founder</h4>
		<p class="text-left">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
		<button class="btn btn-default btn-block">Contact</button>
      </div>
</div>

<div class="col-sm-3">
      <div class="thumbnail">
        <img src="../image/team2.jpg" alt="Paris">
        <h4 class="text-left">John Deo</h4>
		<h4 class="text-left" style="color:#ccc;font-size:1em">CEO & Founder</h4>
		<p class="text-left">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
		<button class="btn btn-default btn-block">Contact</button>
      </div>
</div>
<div class="col-sm-3">
      <div class="thumbnail">
        <img src="../image/team3.jpg" alt="Paris">
        <h4 class="text-left">John Deo</h4>
		<h4 class="text-left" style="color:#ccc;font-size:1em">CEO & Founder</h4>
		<p class="text-left">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
		<button class="btn btn-default btn-block">Contact</button>
      </div>
</div>
<div class="col-sm-3">
      <div class="thumbnail">
        <img src="../image/team4.jpg" alt="Paris">
        <h4 class="text-left">John Deo</h4>
		<h4 class="text-left" style="color:#ccc;font-size:1em">CEO & Founder</h4>
		<p class="text-left">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
		<button class="btn btn-default btn-block">Contact</button>
      </div>
</div>
</section>


<section id="contact">
<div class="container-fluid">
<h3>Contact</h3><br>
<form class="form-horizontal" action="">
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12"> 
      <input type="email" class="form-control" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Subject">
    </div>
  </div>  
  <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" placeholder="Comment">
    </div>
  </div> 
 <div class="form-group"> 
    <div class="col-sm-12">
      <button type="submit" class="btn btn-default bg-dark">SEND MESSAGE</button>
    </div>
  </div>
</form>
<div id="map-container-3" class="z-depth-1" style="height: 500px">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.944672217984!2d77.5606165!3d12.9112776!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1534932824769" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</section>
</body>
</html>