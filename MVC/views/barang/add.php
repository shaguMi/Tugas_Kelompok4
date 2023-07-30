<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Data Barang</h2>

        <form method="post" action="?controller=barang&action=add">
            <table width="50%">
                <tr>
                    <td>ID Barang :</td>
                    <td> <input type="text" name="IdBarang" value="" >
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang :</td>
                    <td> <input type="text" name="NamaBarang" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Keterangan :</td>
                    <td> <input type="text" name="Keterangan" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Satuan :</td>
                    <td> <input type="text" name="Satuan" value="" required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value=""
                            required></td>
                </tr>
                <tr>
                <tr>
                    <td>Harga Beli :</td>
                    <td> <input type="text" name="HargaBeli" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Harga Jual :</td>
                    <td> <input type="text" name="HargaJual" value=""
                            required></td>
                </tr>
                <tr>    
                    <td><input type="submit" name="add" value="Tambah Barang"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
