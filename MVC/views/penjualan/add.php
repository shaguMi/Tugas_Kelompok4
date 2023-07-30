<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Penjualan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Data Penjualan</h2>

        <form method="post" action="?controller=penjualan&action=add">
            <table width="50%">
                <tr>
                    <td>ID Penjualan :</td>
                    <td> <input type="text" name="IdPenjualan" value="" >
                    </td>
                </tr>
                <tr>
                    <td>ID Barang :</td>
                    <td> <input type="text" name="IdBarang" value="" >
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Penjualan :</td>
                    <td> <input type="text" name="JumlahPenjualan" value=""
                            required></td>
                </tr>
                <tr>
                    <td>Harga Penjualan :</td>
                    <td> <input type="text" name="Hargajual" value=""
                            required></td>
                </tr>
                <tr>
                    <td>ID Pengguna :</td>
                    <td> <input type="text" name="IdPengguna" value=""
                            required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="add" value="Tambah Penjualan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>