<head>
<link rel="stylesheet" href="../style.css">

</head>

<?php
include '../connect.php';
$id = $_GET['idrsv'];
$data = mysqli_query($connect, "SELECT * FROM reservasi WHERE id_reservasi='$id'");
while($id = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="action-edit-reservasi.php">
        <div class="container">
        <h3>Edit Reservasi</h3>

        <table>
            <tr>
                <td>Id Reservasi</td>
                <td><input type="number" name="IdReservasi" value="<?php echo $id['id_reservasi'];?>" readonly></td>
            </tr>
            <tr>
                <td>Id Customer</td>
                <td><input type="number" name="IdCustomer" value="<?php echo $id['id_customer'];?>"></td>
            </tr>
            <tr>
                <td>Id Kamar</td>
                <td><input type="number" name="IdKamar" value="<?php echo $id['id_kamar'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal Check-in</td>
                <td><input type="date" name="TglCheckin" value="<?php echo $id['tanggal_checkin'];?>"></td>
            </tr>
            <tr>
                <td>Tanggal Check-out</td>
                <td><input type="date" name="TglCheckout" value="<?php echo $id['tanggal_checkout'];?>"></td>
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