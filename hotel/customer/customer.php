<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel</title>
    <link rel="stylesheet" href="../style.css">
</head>
<nav class="navbar">
                <div class="title"><a href="#">MeikartaHotel.</a></div>
                    <ul>
                        <li><a href="../kamar/kamar.php">Kamar</a></li> 
                        <li><a href="../customer/customer.php">Customer</a></li> 
                        <li><a href="../transaksi/transaksi.php">Transaksi</a></li> 
                        <li><a href="../reservasi/reservasi.php">Reservasi</a></li> 
                    </ul>
                <div class="AuthBtn">
                <a href="../authentication.php">Login out</a>
            </nav>
    <div class="container">
    <h1>Customer</h1>
        <table border="1">
            <tr class="tableData">
                <td>Id Customer</td>
                <td>Nama Customer</td>
                <td>Alamat Customer</td> 
                <td>Nomor Customer</td>
                <td> Aksi </td>

            </tr>
        <?php 
        include '../connect.php';
        $data = mysqli_query($connect, "SELECT * FROM customer");
        while($c=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $c['id_customer'];?></td>
                <td><?php echo $c['nama_customer'];?></td>
                <td><?php echo $c['alamat_customer'];?></td>
                <td><?php echo $c['nomor_customer'];?></td>
                <td>
                    <a href="delete-customer.php?idcus=<?php echo $c['id_customer'];?>" class="actionButton">Hapus data</a>
                    <a href="edit-customer.php?idcus=<?php echo $c['id_customer'];?>" class="actionButton">Edit</a>
                </td>
                </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='input-customer.php'" class="inputBtn">Input</button>
    <button onclick="document.location='../dashboard.php'" class="backBtn">Back</button>
    </div>
<body>
    
</body>
</html>