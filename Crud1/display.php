<!DOCTYPE html>
<html>
<head>
<title>Display Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
    border-bottom: 0;
    text-align: center;
}

</style>
<body>
<div class="container text-center">
<br><br>
<div class="panel panel-danger">
<div class="panel-heading text-center"><h1>Display Data</h1></div>
 <div class="table-responsive">          
  <table class="table table-bordered table-striped table-hovered">
    <thead>
      <tr>
        <th>Employee Id</th>
        <th>Employee Name</th>
        <th>Employee Salary</th>
        <th>Employee Email</th>
		<th>Delete</th>
		<th>Update</th>
      </tr>
    </thead>
	
<?php
	include("database.php");
	$sql="select * from employee";
	$q = mysqli_query($con,$sql);
	while($res=mysqli_fetch_array($q)){
?>
    <tbody class="text-center">
      <tr>
        <td><?php echo $res['empId'];?></td>
        <td><?php echo $res['ename'];?></td>
        <td><?php echo $res['esal']?></td>
        <td><?php echo $res['email']?></td>	
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $res['empId'];?>">Delete</a></td>	
        <td><a class="btn btn-success" href="update.php?id=<?php echo $res['empId'];?>">Update</a></td>	
      </tr>
    </tbody>
	
	<?php } ?>
	</table>
  </div>
</div>
</div>
</div>





</div>

</body>
</html>