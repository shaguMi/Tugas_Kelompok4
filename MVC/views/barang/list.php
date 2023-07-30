<!DOCTYPE html>
<html>
    <head>
        <title>List Barang</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <table>
        <tr>
            <td>
                <h3>Data Barang</h3>
            </td>
        </tr>
        <table border="1">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Satuan</th>
                <th>ID Pengguna</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>

            <?php
            foreach ($listBarang as $barang) {
                echo "<tr>";
                echo "<td>" . $barang->idBarang . "</td>";
                echo "<td>" . $barang->namaBarang . "</td>";
                echo "<td>" . $barang->keterangan . "</td>";
                echo "<td>" . $barang->satuan . "</td>";
                echo "<td>" . $barang->idPengguna . "</td>";
                echo "<td>" . $barang->hargaBeli . "</td>";
                echo "<td>" . $barang->hargaJual . "</td>";
                echo "<td><a href='?controller=barang&action=update&id=" . $barang->idBarang . "'>Edit</a> | <a href='?controller=barang&action=delete&id=" . $barang->idBarang . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <table>
        <tr>
                <td><a class="button" href='?controller=barang&action=add'>Tambah Barang</a>
            </td>
        </tr>
        </table>
    </body>

</html>