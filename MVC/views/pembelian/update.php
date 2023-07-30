<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Pembelian Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data Pembelian Barang</h2>

        <form method="post" action="?controller=pembelian&action=update&id=<?=$pembelian->idPembelian?>">
            <table width="50%">
                <tr>
                    <td>ID Pembelian :</td>
                    <td> <input type="text" name="IdPembelian" value="<?php echo $pembelian->idPembelian; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>ID Barang :</td>
                    <td> <input type="text" name="IdBarang" value="<?php echo $pembelian->idBarang; ?>;>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pembelian :</td>
                    <td> <input type="text" name="JumlahPembelian" value="<?php echo $pembelian->jumlahPembelian; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Harga Pembelian :</td>
                    <td> <input type="text" name="HargaBeli" value="<?php echo $pembelian->hargaBeli; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value="<?php echo $pembelian->idPengguna; ?>"
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