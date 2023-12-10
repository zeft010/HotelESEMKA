<?php
include '../connect.php';

$id = $_GET['idtrans'];
mysqli_query($connect, "DELETE FROM transaksi WHERE id_transaksi='$id'");
header("location:transaksi.php");


?>