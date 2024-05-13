<?php
session_start();

include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $tanggal_checkin = $_POST['tanggal_checkin'];
    $tanggal_checkout = $_POST['tanggal_checkout'];

    // Calculate total price
    $harga_per_malam = 0;
    switch ($tipe_kamar) {
        case 'Deluxe Suite':
            $harga_per_malam = 500000;
            break;
        case 'Premier Suite':
            $harga_per_malam = 1000000;
            break;
        case 'Executive Suite':
            $harga_per_malam = 1500000;
            break;
        default:
            $harga_per_malam = 0;
    }
    $total_harga = $harga_per_malam * (strtotime($tanggal_checkout) - strtotime($tanggal_checkin)) / (60 * 60 * 24);

    // Get the username associated with the current session
    $username = $_SESSION['username'];

    // Get the user's ID based on their username
    $user_query = "SELECT username FROM useraccount WHERE username = '$username'";
    $user_result = mysqli_query($connect, $user_query);
    $user_row = mysqli_fetch_assoc($user_result);
    $user_id = $user_row['username'];

    // Insert data into the customer table
    $insert_customer_query = "INSERT INTO customer (nama_customer, alamat_customer, nomor_customer) VALUES ('$nama', '$alamat', '$nomor')";
    $insert_customer_result = mysqli_query($connect, $insert_customer_query);

    if ($insert_customer_result) {
        // Get the ID of the last inserted customer
        $customer_id = mysqli_insert_id($connect);

        // Insert data into the reservasi table
        $insert_reservasi_query = "INSERT INTO reservasi (id_customer, tipe_kamar, tanggal_checkin, tanggal_checkout, total) VALUES ('$customer_id', '$tipe_kamar', '$tanggal_checkin', '$tanggal_checkout', $total_harga)";
        $insert_reservasi_result = mysqli_query($connect, $insert_reservasi_query);

        if ($insert_reservasi_result) {
            // Get the ID of the last inserted reservasi
            $reservasi_id = mysqli_insert_id($connect);

            // Insert data into the history table
            $insert_history_query = "INSERT INTO history (id_reservasi, username, nama_customer, alamat_customer, nomor_customer, tipe_kamar, tanggal_checkin, tanggal_checkout, total, status) VALUES ('$reservasi_id', '$username', '$nama', '$alamat', '$nomor', '$tipe_kamar', '$tanggal_checkin', '$tanggal_checkout', $total_harga, 'Waiting For Validation')";
            $insert_history_result = mysqli_query($connect, $insert_history_query);

            if ($insert_history_result) {
                echo '<script>alert("Terimakasih sudah melakukan reservasi, kami akan menghubungi anda dalam 24 Jam untuk konfirmasi"); window.location.href = "user/index_registered.php";</script>';
                exit();
            } else {
                $error = "Error: " . mysqli_error($connect);
            }
        } else {
            $error = "Error: " . mysqli_error($connect);
        }
    } else {
        $error = "Error: " . mysqli_error($connect);
    }
}
?>
