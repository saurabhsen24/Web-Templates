<?php

include("database.php");
$id=$_GET['id'];
$sql="DELETE FROM `employee` WHERE empId=$id";
mysqli_query($con,$sql);
header("location:display.php");
?>