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

    $insert_customer_query = "INSERT INTO customer (nama_customer, alamat_customer, nomor_customer) VALUES ('$nama', '$alamat', '$nomor')";
    $insert_customer_result = mysqli_query($connect, $insert_customer_query);

    if ($insert_customer_result) {
        $customer_id = mysqli_insert_id($connect);

        $insert_reservasi_query = "INSERT INTO reservasi (id_customer, tipe_kamar, tanggal_checkin, tanggal_checkout, total) VALUES ('$customer_id', '$tipe_kamar', '$tanggal_checkin', '$tanggal_checkout', $total_harga)";
        $insert_reservasi_result = mysqli_query($connect, $insert_reservasi_query);

        if ($insert_reservasi_result) {
            echo '<script>alert("Terimakasih sudah melakukan reservasi, kami akan menghubungi anda dalam 24 Jam untuk konvirmasi"); window.location.href = "index_registered.php";</script>';
            exit();
        } else {
            $error = "Error: " . mysqli_error($connect);
        }
    } else {
        $error = "Error: " . mysqli_error($connect);
    }
}
?>
