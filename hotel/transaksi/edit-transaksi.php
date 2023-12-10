<head>
<link rel="stylesheet" href="../style.css">

</head>

<?php
include '../connect.php';
$id = $_GET['idtrans'];
$data = mysqli_query($connect, "SELECT * FROM transaksi WHERE id_transaksi='$id'");
while($id = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="action-edit-transaksi.php">
        <div class="container">
        <h3>Edit Fasilitas</h3>

        <table>
            <tr>
                <td>Id Transaksi</td>
                <td><input type="number" name="IdTransaksi" value="<?php echo $id['id_transaksi'];?>" readonly></td>
            </tr>
            <tr>
                <td>Id Reservasi</td>
                <td><input type="number" name="IdReservasi" value="<?php echo $id['id_reservasi'];?>"></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="number" name="TotalTransaksi" value="<?php echo $id['total'];?>"></td>
            </tr>
            <tr>
            <td>Status</td>
                <td class="select-container">
                    <select name="PaymentStatus" class="optionStat" value="<?php echo $id['id_transaksi'];?>">
                    <option value="UNSET" selected hidden>Pilih Status</option>
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUM LUNAS">Belum Lunas</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Tanggal Bayar : </td>
                <td><input type="date" name="TanggalBayar"></td>
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