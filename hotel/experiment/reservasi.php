<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<nav class="navbar">
    <div class="title"><a href="#">MeikartaHotel.</a></div>
    <ul>
        <li><a href="../kamar/kamar.php">Kamar</a></li> 
        <li><a href="../customer/customer.php">Customer</a></li> 
        <li><a href="../transaksi/transaksi.php">Transaksi</a></li> 
        <li><a href="../reservasi/reservasi.php">Reservasi</a></li> 
    </ul>
    <div class="AuthBtn">
        <a href="../authentication.php">Logout</a>
    </div>
</nav>

<div class="container">
    <h1>Reservasi Hotel</h1>
    <table border="1">
        <tr class="tableData">
            <td>Id Reservasi</td>
            <td>Nama Customer</td>
            <td>Alamat Customer</td>
            <td>Nomor Customer</td>
            <td>Tipe Kamar</td> 
            <td>Tanggal Check-in</td>
            <td>Tanggal Check-out</td>
            <td>Total</td>
            <td> Aksi </td>
        </tr>
        <?php 
        include 'connecthotel2.php';
        $data = mysqli_query($connect, "SELECT reservasi.id_reservasi, customer.nama_customer, customer.alamat_customer, customer.nomor_customer, reservasi.tipe_kamar, reservasi.tanggal_checkin, reservasi.tanggal_checkout, reservasi.total 
                                            FROM reservasi 
                                            JOIN customer ON reservasi.id_customer = customer.id_customer");

        while($r=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $r['id_reservasi'];?></td>
                <td><?php echo $r['nama_customer'];?></td>
                <td><?php echo $r['alamat_customer'];?></td>
                <td><?php echo $r['nomor_customer'];?></td>
                <td><?php echo $r['tipe_kamar'];?></td>
                <td><?php echo $r['tanggal_checkin'];?></td>
                <td><?php echo $r['tanggal_checkout'];?></td>
                <td><?php echo $r['total'];?></td>
                <td>
                    <a href="accept-reservasi.php?idrsv=<?php echo $r['id_reservasi'];?>" class="ResrvBtnAcpt">Accept</a>
                    <a href="delete-reservasi.php?idrsv=<?php echo $r['id_reservasi'];?>" class="ResrvBtnDecline">Decline</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='input-reservasi.php'" class="inputBtn">Input</button>
    <button onclick="document.location='../dashboard.php'" class="backBtn">Back</button>
</div>

</body>
</html>
