<?php

$con = mysqli_connect('localhost','root','','bootcamp_v2');

mysqli_query($con, "DELETE FROM nama WHERE id = ".$_GET['id']."");
header('location:7.php');
?>