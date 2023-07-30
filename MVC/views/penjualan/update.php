<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data Penjualan</h2>

        <form method="post" action="?controller=penjualan&action=update&id=<?=$penjualan->idPenjualan?>">
            <table width="50%">
                <tr>
                    <td>ID Penjualan :</td>
                    <td> <input type="text" name="IdPenjualan" value="<?php echo $penjualan->idPenjualan; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>ID Barang :</td>
                    <td> <input type="text" name="IdBarang" value="<?php echo $penjualan->idBarang; ?>;>"
                    required></td>
                </tr>
                <tr>
                    <td>Jumlah Penjualan :</td>
                    <td> <input type="text" name="JumlahPenjualan" value="<?php echo $penjualan->jumlahPenjualan; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Harga Penjualan :</td>
                    <td> <input type="text" name="Hargajual" value="<?php echo $penjualan->hargaJual; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value="<?php echo $penjualan->idPengguna; ?>"
                            required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" value="Update Data"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>