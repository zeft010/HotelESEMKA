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
    <h1>Transaksi</h1>
        <table border="1">
            <tr class="tableData">
                <td>Id Transaksi</td>
                <td>Id Reservasi</td>
                <td>Total</td> 
                <td>Payment Status</td>
                <td>Tanggal Bayar</td>
                <td> Aksi </td>

            </tr>
        <?php 
        include '../connect.php';
        $data = mysqli_query($connect, "SELECT * FROM transaksi");
        while($f=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $f['id_transaksi'];?></td>
                <td><?php echo $f['id_reservasi'];?></td>
                <td><?php echo $f['total'];?></td>
                <td><?php echo $f['payment_status'];?></td>
                <td><?php echo $f['tanggal_bayar'];?></td>
                <td>
                    <a href="delete-transaksi.php?idtrans=<?php echo $f['id_transaksi'];?>" class="actionButton">Hapus data</a>
                    <a href="edit-transaksi.php?idtrans=<?php echo $f['id_transaksi'];?>" class="actionButton">Edit</a>
                </td>
                </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='input-transaksi.php'" class="inputBtn">Input</button>
    <button onclick="document.location='../dashboard.php'" class="backBtn">Back</button>
    </div>
<body>
    
</body>
</html>