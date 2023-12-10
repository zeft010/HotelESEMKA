<head>
<link rel="stylesheet" href="../style.css">

</head>

<?php
include '../connect.php';
$id = $_GET['idkmr'];
$data = mysqli_query($connect, "SELECT * FROM kamar WHERE id_kamar='$id'");
while($id = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="action-edit-kamar.php">
        <div class="container">
        <h3>Edit Kamar</h3>

        <table>
            <tr>
                <td>Id Kamar</td>
                <td><input type="number" name="IdKamar" value="<?php echo $id['id_kamar'];?>" readonly></td>
            </tr>
            <tr>
                <td>Nomor Kamar</td>
                <td><input type="number" name="NoKamar" value="<?php echo $id['nomor_kamar'];?>"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td><input type="text" name="TipeKamar" value="<?php echo $id['tipe_kamar'];?>"></td>
            </tr>
            <tr>
                <td>Harga Kamar</td>
                <td><input type="number" name="HargaKamar" value="<?php echo $id['harga_kamar'];?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td class="select-container">
                    <select name="Status" class="optionStat" value="<?php echo $id['id_kamar'];?>">
                    <option value="none" selected disabled hidden>Pilih Status</option>
                    <option value="TERSEDIA">TERSEDIA</option>
                    <option value="TERPESAN">TERPESAN</option>
                    <option value="DALAM PERBAIKAN">DALAM PERBAIKAN</option>                    
                </select></td>
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