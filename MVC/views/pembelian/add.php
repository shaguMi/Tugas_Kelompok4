<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Data Pembelian</h2>

        <form method="post" action="?controller=pembelian&action=add">
            <table width="50%">
                <tr>
                    <td>ID Pembelian :</td>
                    <td> <input type="text" name="IdPembelian" value="" >
                    </td>
                </tr>
                <tr>
                    <td>Id Barang :</td>
                    <td> <input type="text" name="IdBarang" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Jumlah Pembelian :</td>
                    <td> <input type="text" name="JumlahPembelian" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Harga Pembelian :</td>
                    <td> <input type="text" name="HargaBeli" value=""
                            required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value=""
                            required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="add" value="Tambah Pembelian"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>