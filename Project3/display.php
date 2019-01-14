
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
<?php include("header.php"); ?>
</section>
<section id="main">
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#" class="btn btn-success btn-block">DISPLAY</a></p>
      <p><a href="#" class="btn btn-info btn-block">DASHBOARD</a></p>
      <p><a href="#" class="btn btn-primary btn-block">HR DEPARTMENT</a></p>
      <p><a href="#" class="btn btn-warning btn-block">SALES DEPARTMENT</a></p>
      <p><a href="#" class="btn btn-success btn-block">MARKETING DEPARTMENT</a></p>
    </div>
	<div class="container-fluid">
    <div class="col-sm-8 text-left">
     <h1 class="text-info text-center">Add New User<span><a href="add.php" class="pull-right"><img src="../image/add.png"></a></span></h1>
         <br/>
 	 <div class="table-responsive">
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th>UserId</th>
        <th>Name</th>
        <th>Username</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>View</th>
      </tr>
    </thead>

<?php
include("database.php");
$sql = "select * from register";
$q = mysqli_query($con,$sql);
while($res=mysqli_fetch_array($q)){
	//print_r($res);
?>
    <tbody>
      <tr>
        <td><?php  echo $res['userId'] ; ?></td>
        <td><?php  echo $res['name'] ; ?></td>
        <td><?php  echo $res['username'] ; ?></td>
        <td><?php  echo $res['phone'] ; ?></td>
        <td><?php  echo $res['email'] ; ?></td>
        <td><?php  echo $res['gender'] ; ?></td>
        <td><a href="update.php?id=<?php echo $res['userId'];?>" class="btn btn-success" onclick = "return popupUpdate()">Update</a></td>
        <td><a href="delete.php?id=<?php echo $res['userId'];?>" class="btn btn-danger" onclick = "return popupDel()">Delete</a></td>
        <td><a href="view.php?id=<?php echo $res['userId'];?>" class="btn btn-info">View</a></td>
      </tr>
    </tbody>
<?php } ?>
  </table>
  </div>



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
  function popupDel() {
    var a = confirm('Do you want to delete?');
    return a;
  }

  function popupUpdate() {
    var a = confirm('Do you want to update?');
    return a;
  }
</script>

</body>
</html>
