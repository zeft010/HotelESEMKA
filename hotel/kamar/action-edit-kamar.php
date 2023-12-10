<?php
include '../connect.php';

$idkmr = $_POST['IdKamar'];
$nokmr = $_POST['NoKamar'];
$tipekmr = $_POST ['TipeKamar'];
$hargakmr = $_POST ['HargaKamar'];
$status = $_POST ['Status'];
mysqli_query($connect, "UPDATE kamar SET id_kamar='$idkmr',nomor_kamar='$nokmr',tipe_kamar='$tipekmr',harga_kamar='$hargakmr',status='$status' where id_kamar='$idkmr'");
header("location:kamar.php");

?>