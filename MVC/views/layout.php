<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <header>
    <head>
      <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover:not(.active) {
        background-color: #111;
      }

      .active {
        background-color: #04AA6D;
      }
      </style>
    </head>
    <body>
      <ul>
        <li><a class="active" href='/MVC/index.php'>Home</a></li>
        <li><a href='?controller=barang&action=list'>Data Barang</a></li>
        <li><a href='?controller=penjualan&action=list'>Penjualan</a></li>
        <li><a href='?controller=pembelian&action=list'>Pembelian</a></li>
        <li><a href='?controller=laporanJualBeli&action=list'>Laporan Penjualan & Pembelian</a></li>
      </ul>

      <?php require_once('routes.php'); ?>
    <body>
  </header>
<html>