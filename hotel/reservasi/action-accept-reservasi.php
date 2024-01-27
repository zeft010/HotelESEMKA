<?php
session_start();

include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idrsv'])) {
    $id_reservasi = $_GET['idrsv'];

    // Fetch reservation data
    $get_reservasi_query = "SELECT * FROM reservasi WHERE id_reservasi = $id_reservasi";
    $get_reservasi_result = mysqli_query($connect, $get_reservasi_query);

    if ($get_reservasi_result && $reservasi = mysqli_fetch_assoc($get_reservasi_result)) {
        $id_customer = $reservasi['id_customer'];

        // Fetch customer data
        $get_customer_query = "SELECT * FROM customer WHERE id_customer = $id_customer";
        $get_customer_result = mysqli_query($connect, $get_customer_query);

        if ($get_customer_result && $customer = mysqli_fetch_assoc($get_customer_result)) {
            $nama_customer = $customer['nama_customer'];
            $alamat_customer = $customer['alamat_customer'];
            $nomor_customer = $customer['nomor_customer'];
            $tipe_kamar = $reservasi['tipe_kamar'];
            $tanggal_checkin = $reservasi['tanggal_checkin'];
            $tanggal_checkout = $reservasi['tanggal_checkout'];
            $total = $reservasi['total'];

            // Start transaction
            mysqli_begin_transaction($connect);

            // Delete data from the reservasi table
            $delete_reservasi_query = "DELETE FROM reservasi WHERE id_reservasi = $id_reservasi";
            $delete_reservasi_result = mysqli_query($connect, $delete_reservasi_query);

            if ($delete_reservasi_result) {
                // Insert data into the transaksi table
                $insert_transaksi_query = "INSERT INTO transaksi (id_reservasi, nama_customer, alamat_customer, nomor_customer, tipe_kamar, tanggal_checkin, tanggal_checkout, total) VALUES ('$id_reservasi','$nama_customer', '$alamat_customer', '$nomor_customer', '$tipe_kamar', '$tanggal_checkin', '$tanggal_checkout', $total)";
                $insert_transaksi_result = mysqli_query($connect, $insert_transaksi_query);

                if ($insert_transaksi_result) {
                    // Commit transaction if successful
                    mysqli_commit($connect);
                    header("Location: reservasi.php");  // Redirect to the reservasi page after success
                    exit();
                } else {
                    // Rollback transaction if there's an error
                    mysqli_rollback($connect);
                    $error = "Error: " . mysqli_error($connect);
                }
            } else {
                // Rollback transaction if there's an error
                mysqli_rollback($connect);
                $error = "Error: " . mysqli_error($connect);
            }
        } else {
            $error = "Error: Unable to fetch customer data.";
        }
    } else {
        $error = "Error: Unable to fetch reservation data.";
    }
}
?>
