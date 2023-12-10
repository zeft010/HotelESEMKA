<?php 
include '../connect.php';

$idkamar = $_POST['IdKamar'];
$nokamar = $_POST['NoKamar'];
$tipekamar = $_POST['TipeKamar'];
$harga = $_POST['HargaKamar'];
$status = $_POST['Status'];

mysqli_query($connect, "INSERT INTO kamar VALUES ('$idkamar','$nokamar','$tipekamar','$harga','$status')");
header("location:kamar.php");
?>