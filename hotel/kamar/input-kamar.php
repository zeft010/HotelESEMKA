
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<form method="post" action="action-input-kamar.php">
    <div class="container">
    <h3>Input Data Kamar</h3>
        <table>
            <tr>
                <td>Id Kamar : </td>
                <td><input type="number" name="IdKamar"></td>
            </tr>
            <tr>
                <td>Nomor Kamar : </td>
                <td><input type="number " name="NoKamar"></td>
            </tr>
            <tr>
                <td>Tipe Kamar : </td>
                <td><input type="text" name="TipeKamar"></td>
            </tr>
            <tr>
                <td>Harga Kamar : </td>
                <td><input type="number" name="HargaKamar"></td>
            </tr>
            <tr>
            <td>Status : </td>
            <td class="select-container">
                <select name="Status" class="optionStat">
                    <option value="none" selected disabled hidden>Pilih Status</option>
                    <option value="TERSEDIA">TERSEDIA</option>
                    <option value="TERPESAN">TERPESAN</option>
                    <option value="DALAM PERBAIKAN">DALAM PERBAIKAN</option>
                </select>
            </td>
            
        </table>
        <div class="submitBtn">
                <input class="inputBtn"type="submit" name="Submit">
        </div>
    </div>
</form>