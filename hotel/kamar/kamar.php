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
    <h1>Kamar Hotel</h1>
        <table border="1">
            <tr class="tableData">
                <td>Id Kamar</td>
                <td>Nomor Kamar</td>
                <td>Tipe</td> 
                <td>Harga</td>
                <td>Status</td>
                <td> Aksi </td>
            </tr>
        <?php 
        include '../connect.php';
        $data = mysqli_query($connect, "SELECT * FROM kamar");
        while($k=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $k['id_kamar'];?></td>
                <td><?php echo $k['nomor_kamar'];?></td>
                <td><?php echo $k['tipe_kamar'];?></td>
                <td><?php echo $k['harga_kamar'];?></td>
                <td><?php echo $k['status'];?></td>
                <td>
                    <a href="delete-kamar.php?idkmr=<?php echo $k['id_kamar'];?>" class="actionButton">Hapus data</a>
                    <a href="edit-kamar.php?idkmr=<?php echo $k['id_kamar'];?>" class="actionButton">Edit</a>
                </td>
                </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='input-kamar.php'" class="inputBtn">Input</button>
    <button onclick="document.location='../dashboard.php'" class="backBtn">Back</button>
    </div>
<body>
    
</body>
</html>