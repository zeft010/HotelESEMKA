<head>
<link rel="stylesheet" href="../style.css">

</head>

<?php
include '../connect.php';
$id = $_GET['idcus'];
$data = mysqli_query($connect, "SELECT * FROM customer WHERE id_customer='$id'");
while($id = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="action-edit-customer.php">
        <div class="container">
        <h3>Edit Customer</h3>

        <table>
            <tr>
                <td>Id Customer</td>
                <td><input type="number" name="IdCustomer" value="<?php echo $id['id_customer'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td><input type="text" name="NamaCustomer" value="<?php echo $id['nama_customer'];?>"></td>
            </tr>
            <tr>
                <td>Absen Customer</td>
                <td><input type="text" name="AlamatCustomer" value="<?php echo $id['alamat_customer'];?>"></td>
            </tr>
            <tr>
                <td>Nomor Customer</td>
                <td><input type="number" name="NomorCustomer" value="<?php echo $id['nomor_customer'];?>"></td>
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