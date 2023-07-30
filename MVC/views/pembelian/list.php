<!DOCTYPE html>
<html>
    <head>
        <title>List Pembelian Barang</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <table>
    <table>
    <table>
            <tr>
                <td>
                    <h3>List Pembelian Barang</h3>
                </td>
            </tr>

    <body>
            <table border="1">
            <tr>
                <th>ID Pembelian</th>
                <th>ID Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga Pembelian</th>
                <th>ID Pengguna</th>
                <th>Aksi</th>
            </tr>

            <?php
            foreach ($listPembelian as $pembelian) {
                echo "<tr>";
                echo "<td>" . $pembelian->idPembelian . "</td>";
                echo "<td>" . $pembelian->idBarang . "</td>";
                echo "<td>" . $pembelian->jumlahPembelian . "</td>";
                echo "<td>" . $pembelian->hargaBeli . "</td>";
                echo "<td>" . $pembelian->idPengguna . "</td>";
                echo "<td><a href='?controller=pembelian&action=update&id=" . $pembelian->idPembelian . "'>Edit</a> | <a href='?controller=pembelian&action=delete&id=" . $pembelian->idPembelian . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table>
            <tr>
                <td><a class ="button" href='?controller=pembelian&action=add'>Tambah Pembelian</a>
                </tr>
        </table> 
            </body>

</html>