<?php
session_start();
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idrsv']) && isset($_GET['action'])) {
    $id_reservasi = $_GET['idrsv'];
    $action = $_GET['action'];

   $new_status = ($action == 'accept') ? 'Accepted' : 'Declined';

    $update_history_query = "UPDATE history SET status = '$new_status' WHERE id_reservasi = $id_reservasi";
    $update_history_result = mysqli_query($connect, $update_history_query);

    if ($update_history_result) {
        if ($action == 'accept') {
            $get_reservasi_query = "SELECT * FROM reservasi WHERE id_reservasi = $id_reservasi";
            $get_reservasi_result = mysqli_query($connect, $get_reservasi_query);

            if ($get_reservasi_result && $reservasi = mysqli_fetch_assoc($get_reservasi_result)) {
                $id_customer = $reservasi['id_customer'];
                $get_customer_query = "SELECT * FROM customer WHERE id_customer = $id_customer";
                $get_customer_result = mysqli_query($connect, $get_customer_query);

                if ($get_customer_result && $customer = mysqli_fetch_assoc($get_customer_result)) {
                    $insert_transaksi_query = "INSERT INTO transaksi (id_reservasi, nama_customer, alamat_customer, nomor_customer, tipe_kamar, tanggal_checkin, tanggal_checkout, total) 
                                                VALUES ('$id_reservasi', '{$customer['nama_customer']}', '{$customer['alamat_customer']}', '{$customer['nomor_customer']}', '{$reservasi['tipe_kamar']}', '{$reservasi['tanggal_checkin']}', '{$reservasi['tanggal_checkout']}', '{$reservasi['total']}')";
                    $insert_transaksi_result = mysqli_query($connect, $insert_transaksi_query);

                    if ($insert_transaksi_result) {
                        $delete_reservasi_query = "DELETE FROM reservasi WHERE id_reservasi = $id_reservasi";
                        $delete_reservasi_result = mysqli_query($connect, $delete_reservasi_query);

                        if ($delete_reservasi_result) {
                            header("Location: reservasi.php"); 
                            exit();
                        } else {
                            $error = "Error: " . mysqli_error($connect);
                        }
                    } else {
                        $error = "Error: " . mysqli_error($connect);
                    }
                } else {
                    $error = "Error: Unable to fetch customer data.";
                }
            } else {
                $error = "Error: Unable to fetch reservation data.";
            }
        } else {
            $delete_reservasi_query = "DELETE FROM reservasi WHERE id_reservasi = $id_reservasi";
            $delete_reservasi_result = mysqli_query($connect, $delete_reservasi_query);

            if ($delete_reservasi_result) {
                header("Location: reservasi.php"); 
                exit();
            } else {
                $error = "Error: " . mysqli_error($connect);
            }
        }
    } else {
        $error = "Error updating status: " . mysqli_error($connect);
    }
}
?>
