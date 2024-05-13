<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<nav class="navbar">
    <div class="title"><a href="#">MeikartaHotel.</a></div>
    <div class="AuthBtn">
        <a href="../authentication.php">Logout</a>
    </div>
</nav>

<div class="container">
    <h1>Reservasi Hotel</h1>
    <table border="1">
        <tr class="tableData">
            <td>Id History</td>
            <td>Id Reservasi</td>
            <td>Nama Customer</td>
            <td>Alamat Customer</td>
            <td>Nomor Customer</td>
            <td>Tipe Kamar</td> 
            <td>Nomor Kamar</td>
            <td>Tanggal Check-in</td>
            <td>Tanggal Check-out</td>
            <td>Total</td>
            <td>Status</td>
        </tr>
        <?php 
        session_start();
        include '../connect.php';
        
        // Get username from session
        $username = $_SESSION['username'];

        $data = mysqli_query($connect, "SELECT history.id_history, history.id_reservasi, history.nama_customer, history.alamat_customer, history.nomor_customer, history.tipe_kamar, history.tanggal_checkin, history.tanggal_checkout, history.total, history.status 
                                            FROM history 
                                            JOIN useraccount 
                                            ON history.username = useraccount.username 
                                            WHERE useraccount.username = '$username'");

        while($r=mysqli_fetch_array($data)){
            ?>
            <tr class="tableData">
                <td><?php echo $r['id_history'];?></td>
                <td><?php echo $r['id_reservasi'];?></td>
                <td><?php echo $r['nama_customer'];?></td>
                <td><?php echo $r['alamat_customer'];?></td>
                <td><?php echo $r['nomor_customer'];?></td>
                <td><?php echo $r['tipe_kamar'];?></td>
                <td><?php echo $r['tanggal_checkin'];?></td>
                <td><?php echo $r['tanggal_checkout'];?></td>
                <td><?php echo $r['total'];?></td>
                <td><?php echo $r['status'];?></td>
            </tr>
            <?php
        }
        ?>
    </table><br>
    <button onclick="document.location='index_registered.php'" class="backBtn">Back</button>
</div>

</body>
</html>
