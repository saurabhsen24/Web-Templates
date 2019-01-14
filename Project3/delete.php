<?php

include("database.php");
$id = $_GET['id'];
$sql = "delete from register where userId = $id";

mysqli_query($con,$sql);

header("location:display.php");

?>