
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<form method="post" action="action-input-reservasi.php">
    <div class="container">
    <h3>Input Data Reservasi</h3>
        <table>
            <tr>
                <td>Id Reservasi : </td>
                <td><input type="number" name="IdReservasi"></td>
            </tr>
            <tr>
                <td>Id Customer : </td>
                <td><input type="number " name="IdCustomer"></td>
            </tr>
            <tr>
                <td>Id Kamar : </td>
                <td><input type="number" name="IdKamar"></td>
            </tr>
            <tr>
                <td>Tanggal Check-In : </td>
                <td><input type="date" name="TglCheckin"></td>
            </tr>
            <tr>
                <td>Tanggal Check-Out : </td>
                <td><input type="date" name="TglCheckout"></td>
            </tr>
        </table>
        <div class="submitBtn">
                <input class="inputBtn"type="submit" name="Submit">
        </div>
    </div>
</form>