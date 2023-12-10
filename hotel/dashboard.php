<?php
    include('connect.php');
    session_start();
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $username = ucfirst($username);
        $greeting = "Welcome <span>$username</span>!";
    } else {
        $greeting = "Welcome <span>Guest</span>"; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meikarta Hotel</title>
</head>
<body>
    <nav class="navbar">
        <div class="title"><a href="#">MeikartaHotel.</a></div>
        <ul>
            <li><a href="kamar/kamar.php">Kamar</a></li> 
            <li><a href="customer/customer.php">Customer</a></li> 
            <li><a href="transaksi/transaksi.php">Transaksi</a></li> 
            <li><a href="reservasi/reservasi.php">Reservasi</a></li> 
        </ul>
        <div class="AuthBtn">
            <a href="authentication.php">Log out</a>
        </div>
    </nav>
    <div class="greeting">
        <h2><?php echo $greeting; ?></h2>
    </div>

</body>
</html>
