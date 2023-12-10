<?php 
include '../connect.php';

$idreservasi = $_POST['IdReservasi'];
$idcustomer = $_POST['IdCustomer'];
$idkamar = $_POST['IdKamar'];
$tglcheckin = $_POST['TglCheckin'];
$tglcheckout = $_POST['TglCheckout'];
mysqli_query($connect, "UPDATE reservasi SET id_reservasi='$idreservasi', id_customer='$idcustomer', id_kamar='$idkamar', tanggal_checkin='$tglcheckin', tanggal_checkout='$tglcheckout' where id_reservasi='$idreservasi'");
header("location:reservasi.php");

?>