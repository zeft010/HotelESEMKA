<?php
include '../connect.php';

$idcus = $_GET['idcus'];
mysqli_query($connect, "DELETE FROM customer WHERE id_customer='$idcus'");
header("location:customer.php");


?>