<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data Barang</h2>

        <form method="post" action="?controller=barang&action=update&id=<?=$barang->idBarang?>">
            <table width="50%">
                <tr>
                    <td>ID Barang :</td>
                    <td> <input type="text" name="IdBarang" value="<?php echo $barang->idBarang; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang :</td>
                    <td> <input type="text" name="NamaBarang" value="<?php echo $barang->namaBarang; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Keterangan :</td>
                    <td> <input type="text" name="Keterangan" value="<?php echo $barang->keterangan; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Satuan :</td>
                    <td> <input type="text" name="Satuan" value="<?php echo $barang->satuan; ?>" required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value="<?php echo $barang->idPengguna; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Harga Beli :</td>
                    <td> <input type="text" name="HargaBeli" value="<?php echo $barang->hargaBeli; ?>"
                            required></td>
                </tr>
                <tr>
                    <td>Harga Jual :</td>
                    <td> <input type="text" name="HargaJual" value="<?php echo $barang->hargaJual; ?>"
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