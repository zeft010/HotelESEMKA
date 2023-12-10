
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<form method="post" action="action-input-transaksi.php">
    <div class="container">
    <h3>Input Data Transaksi</h3>
        <table>
            <tr>
                <td>Id Transaksi : </td>
                <td><input type="number" name="IdTransaksi"></td>
            </tr>
            <tr>
                <td>Id Reservasi : </td>
                <td><input type="number" name="IdReservasi"></td>
            </tr>
            <tr>
                <td>Total : </td>
                <td><input type="number" name="TotalTransaksi"></td>
            </tr>
            <tr>
            <td>Payment Status : </td>
            <td class="select-container">
                <select name="PaymentStatus" class="optionStat">
                <option value="UNSET" selected hidden>Pilih Status</option>
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUMLUNAS">Belum Lunas</option>
                </select>
            </td>            </tr>
            <tr>
                <td>Tanggal Bayar : </td>
                <td><input type="date" name="TanggalBayar"></td>
            </tr>
        </table>
        <div class="submitBtn">
                <input class="inputBtn"type="submit" name="Submit">
        </div>
    </div>
</form>