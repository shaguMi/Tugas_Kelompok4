<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Penjualan & Pembelian</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <table>
        <tr>
            <td>
                <h3>Laporan penjualan & Pembelian</h3>
            </td>
        </tr>
        <table border="1">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Total Penjualan</th>
                <th>Total Pembelian</th>
                <th>Laba</th>
                
            </tr>

            <?php
            foreach ($listLaporanJualBeli as $laporanJualBeli) {
                echo "<tr>";
                echo "<td>" . $laporanJualBeli->idBarang . "</td>";
                echo "<td>" . $laporanJualBeli->namaBarang . "</td>";
                echo "<td>" . $laporanJualBeli->totalPenjualan . "</td>";
                echo "<td>" . $laporanJualBeli->totalPembelian . "</td>";
                echo "<td>" . $laporanJualBeli->laba . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>

</html>