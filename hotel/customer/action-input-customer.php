<?php 
include '../connect.php';

$idcustomer = $_POST['IdCustomer'];
$namacustomer = $_POST['NamaCustomer'];
$alamatcustomer = $_POST['AlamatCustomer'];
$nomorcustomer = $_POST['NomorCustomer'];

mysqli_query($connect, "INSERT INTO customer VALUES ('$idcustomer','$namacustomer','$alamatcustomer','$nomorcustomer')");
header("location:customer.php");
?>