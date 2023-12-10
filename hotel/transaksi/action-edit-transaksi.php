<?php
include '../connect.php';

$idtrans = $_POST['IdTransaksi'];
$idreserv = $_POST['IdReservasi'];
$total= $_POST['TotalTransaksi'];
$paystat = $_POST['PaymentStatus'];
$tanggalbayar = $_POST['TanggalBayar'];

mysqli_query($connect, "UPDATE transaksi SET id_transaksi='$idtrans', id_reservasi='$idreserv', total='$total', payment_status='$paystat', tanggal_bayar='$tanggalbayar' WHERE id_transaksi='$idtrans'");
header("location:transaksi.php");
?>