<?php 
include '../connect.php';

$idtrans = $_POST['IdTransaksi'];
$idreserv = $_POST['IdReservasi'];
$total= $_POST['TotalTransaksi'];
$paystat = $_POST['PaymentStatus'];
$tanggalbayar = $_POST['TanggalBayar'];

mysqli_query($connect, "INSERT INTO transaksi VALUES ('$idtrans','$idreserv','$total','$paystat','$tanggalbayar')");
header("location:transaksi.php");
?>