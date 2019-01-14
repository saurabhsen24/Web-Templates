<?php
include('db.php');
$id=$_GET['id'];
$sql="DELETE FROM `user` WHERE userId=$id";
mysqli_query($con,$sql);
header('location:table.php');
?>