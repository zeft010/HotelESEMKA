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
    <h1>Reservasi Hotel</h1>
        <table border="1">
            <tr class="tableData">
                <td>Id Reservasi</td>
                <td>Id Customer</td>
                <td>Id Kamar</td> 
                <td>Tanggal Check-in</td>
                <td>Tanggal Check-out</td>
                <td> Aksi </td>
            </tr>
        <?php 
        include '../connect.php';
        $data = mysqli_query($connect, "SELECT * FROM reservasi");
        while($r=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $r['id_reservasi'];?></td>
                <td><?php echo $r['id_customer'];?></td>
                <td><?php echo $r['id_kamar'];?></td>
                <td><?php echo $r['tanggal_checkin'];?></td>
                <td><?php echo $r['tanggal_checkout'];?></td>
                <td>
                    <a href="delete-reservasi.php?idrsv=<?php echo $r['id_reservasi'];?>" class="actionButton">Hapus data</a>
                    <a href="edit-reservasi.php?idrsv=<?php echo $r['id_reservasi'];?>" class="actionButton">Edit</a>
                </td>
                </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='input-reservasi.php'" class="inputBtn">Input</button>
    <button onclick="document.location='../dashboard.php'" class="backBtn">Back</button>
    </div>
<body>
    
</body>
</html>