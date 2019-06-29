<?php

$con = mysqli_connect('localhost','root','','bootcamp_v2');

$query = 'SELECT nama.nama as nama, nama.id as id, hobi.nama as hobi, kategory.nama as kategory FROM nama INNER JOIN kategory ON kategory.id = nama.id_category INNER JOIN hobi ON hobi.id = nama.id_hobby';
$result_select2 = mysqli_query($con, $query) or die(mysqli_error());
$rows2 = array();
while($row2 = mysqli_fetch_object($result_select2))
    $rows2[] = $row2;

$query4 = 'SELECT * FROM hobi';
$result_select4 = mysqli_query($con, $query4) or die(mysqli_error());
$rows4 = array();
while($row4 = mysqli_fetch_object($result_select4))
    $rows4[] = $row4;

$query5 = 'SELECT * FROM kategory';
$result_select5 = mysqli_query($con, $query5) or die(mysqli_error());
$rows5 = array();
while($row5 = mysqli_fetch_object($result_select5))
    $rows5[] = $row5;
?>