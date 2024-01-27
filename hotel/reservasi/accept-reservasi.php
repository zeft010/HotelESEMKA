<head>
<link rel="stylesheet" href="../style.css">

</head>

<?php
include '../connect.php';
$id = $_GET['idrsv'];
$data = mysqli_query($connect, "SELECT * FROM reservasi WHERE id_reservasi='$id'");
while($id = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="action-accept-reservasi.php">
        <div class="container">
        <h3>Edit Reservasi</h3>

        <table>
            <tr>
                <td>Id Reservasi</td>
                <td><input type="number" name="IdReservasi" value="<?php echo $id['id_reservasi'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td><input type="text" name="NamaCustomer" value="<?php echo $id['nama_customer'];?>"></td>
            </tr>
            <tr>
                <td>Alamat Customer</td>
                <td><input type="text" name="AlamatCustomer" value="<?php echo $id['alamat_customer'];?>"></td>
            </tr>
            <tr>
                <td>Nomor Customer</td>
                <td><input type="number" name="NomorCustomer" value="<?php echo $id['nomor_customer'];?>"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td><input type="text" name="TipeKamar" value="<?php echo $id['tipe_kamar'];?>" readonly></td>
            </tr>
            <tr>
                <td>Tanggal Check-in</td>
                <td><input type="date" name="TglCheckin" value="<?php echo $id['tanggal_checkin'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal Check-out</td>
                <td><input type="date" name="TglCheckout" value="<?php echo $id['tanggal_checkout'];?>"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="Total" value="<?php echo $id['total'];?>"></td>
            </tr>
        </table>
            <div>
                <input class="inputBtn" type="submit" name="Save">
            </div>
        </div>
    </form>
    <?php
}
?>