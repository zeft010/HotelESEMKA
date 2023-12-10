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
    <h2 >Book Room</h2>
    </center>    
        <form class="bookRoom">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            <label for="nomor">Nomor:</label>
            <input type="text" id="nomor" name="nomor" required>
            <label for="tipe_kamar">Tipe Kamar:</label>
            <select id="tipe_kamar" name="tipe_kamar" required>
                <option value="Deluxe Suite">Deluxe Suite - Rp. 500.000</option>
                <option value="Premier Suite">Premier Suite - Rp. 1.000,000</option>
                <option value="Executive Suite">Executive Suite - Rp. 1.500.000</option>
            </select>
            <label for="tanggal_checkin">Tanggal Check-in:</label>
            <input type="date" id="tanggal_checkin" name="tanggal_checkin" required>
            <label for="tanggal_checkout">Tanggal Check-out:</label>
            <input type="date" id="tanggal_checkout" name="tanggal_checkout" required>
            <button type="submit">Submit Reservation</button>
        </form>
    </div>
</body>
</html>
