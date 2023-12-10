<?php
include '../connect.php';

$idcus = $_POST['IdCustomer'];
$namacus = $_POST['NamaCustomer'];
$alamatcus = $_POST['AlamatCustomer'];
$nocus = $_POST['NomorCustomer'];
mysqli_query($connect, "UPDATE customer SET id_customer='$idcus', nama_customer='$namacus', alamat_customer='$alamatcus', nomor_customer='$nocus' WHERE id_customer='$idcus'");
header("location:customer.php");
?>