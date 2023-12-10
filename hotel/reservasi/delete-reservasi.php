<?php 
include '../connect.php';

$id = $_GET['idrsv'];
mysqli_query($connect, "DELETE FROM reservasi WHERE id_reservasi='$id'");
header("location:reservasi.php");


?>