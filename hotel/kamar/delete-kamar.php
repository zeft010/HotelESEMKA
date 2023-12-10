<?php 
include '../connect.php';

$id = $_GET['idkmr'];
mysqli_query($connect, "DELETE FROM kamar WHERE id_kamar='$id'");
header("location:kamar.php");


?>