<!DOCTYPE html>
<html>
    <head>
        <title>List Penjualan</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <table>
    <table>
    <table>
            <tr>
                <td>
                    <h3>List Penjualan Barang</h3>
                </td>
            </tr>
           
    <body>
            <table border="1">
            <tr>
                <th>ID Penjualan</th>
                <th>ID Barang</th>
                <th>Jumlah Penjualan</th>
                <th>Harga Jual</th>
                <th>ID Pengguna</th>
                <th>Aksi</th>
            </tr>

            <?php
            foreach ($listPenjualan as $penjualan) {
                echo "<tr>";
                echo "<td>" . $penjualan->idPenjualan . "</td>";
                echo "<td>" . $penjualan->idBarang . "</td>";
                echo "<td>" . $penjualan->jumlahPenjualan . "</td>";
                echo "<td>" . $penjualan->hargaJual . "</td>";
                echo "<td>" . $penjualan->idPengguna . "</td>";
                echo "<td><a href='?controller=penjualan&action=update&id=" . $penjualan->idPenjualan . "'>Edit</a> | <a href='?controller=penjualan&action=delete&id=" . $penjualan->idPenjualan . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table>
            <tr>
                <td><a class="button" href='?controller=penjualan&action=add'>Tambah Penjualan</a>
                </tr>
        </table>    
            </body>

</html>