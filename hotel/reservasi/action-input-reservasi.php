<?php 
include '../connect.php';

$idreservasi = $_POST['IdReservasi'];
$idcustomer = $_POST['IdCustomer'];
$idkamar = $_POST['IdKamar'];
$tglcheckin = $_POST['TglCheckin'];
$tglcheckout = $_POST['TglCheckout'];

mysqli_query($connect, "INSERT INTO reservasi VALUES ('$idreservasi','$idcustomer','$idkamar','$tglcheckin','$tglcheckout')");
header("location:reservasi.php");
?>