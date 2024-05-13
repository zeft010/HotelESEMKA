<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meikarta Hotel</title>
</head>
<body id="bg">
    <div class="container booktab">
        <center>
            <h2>Book Room</h2>
        </center>    
        <form action="action_user_input_reservation.php" method="post" id="reservationForm" class="bookRoom">
            <?php
            session_start();
            include('connect.php');

            // Fetch username from session or database
            $username = $_SESSION['username'];

            // Query to fetch user's nama from database based on the username
            $query = "SELECT username FROM useraccount WHERE username = '$username'";
            $result = mysqli_query($connect, $query);

            // Check if query was successful and user was found
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama = $row['username'];

                // Output nama field with the fetched value
                echo '<label for="nama">Nama:</label>';
                echo '<input type="text" id="nama" name="nama" value="' . $nama . '" readonly>';
            } else {
                // If user not found or query failed, display generic nama field
                echo '<label for="nama">Nama:</label>';
                echo '<input type="text" id="nama" name="nama" required>';
            }
            ?>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            <label for="nomor">Nomor:</label>
            <input type="number" id="nomor" name="nomor" required>
            <label for="tipe_kamar">Tipe Kamar:</label>
            <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="Deluxe Suite">Deluxe Suite - Rp. 500,000/night</option>
                <option value="Premier Suite">Premier Suite - Rp. 1,000,000/night</option>
                <option value="Executive Suite">Executive Suite - Rp. 1,500,000/night</option>
            </select>
            <label for="tanggal_checkin">Tanggal Check-in:</label>
            <input type="date" id="tanggal_checkin" name="tanggal_checkin" required>
            <label for="tanggal_checkout">Tanggal Check-out:</label>
            <input type="date" id="tanggal_checkout" name="tanggal_checkout" required>
            <label for="total">Total: <span id="totalDisplay"></span> </label>
            <button type="submit">Submit Reservation</button>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>
