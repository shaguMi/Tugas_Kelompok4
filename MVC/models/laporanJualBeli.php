<?php
  class LaporanJualBeli {
    
    public $idBarang;
    public $namaBarang;
    public $totalPenjualan;
    public $totalPembelian;
    public $laba;

    public function __construct($idBarang, $namaBarang, $totalPenjualan, $totalPembelian, $laba) {
      $this->idBarang = $idBarang;
      $this->namaBarang = $namaBarang;
      $this->totalPenjualan = $totalPenjualan;
      $this->totalPembelian = $totalPembelian;
      $this->laba = $laba;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT barangQuery.IdBarang AS IdBarang, 
                        barangQuery.NamaBarang AS NamaBarang,
                        penjualanQuery.totalPenjualan AS TotalPenjualan,
                        pembelianQuery.totalPembelian AS TotalPembelian,
                        (penjualanQuery.totalPenjualan-pembelianQuery.totalPembelian) AS Laba
                        FROM barang AS barangQuery
                        INNER JOIN
                        (
                            SELECT penjualan.IdBarang, SUM(penjualan.Hargajual * penjualan.JumlahPenjualan) AS totalPenjualan 		FROM penjualan
                            GROUP BY penjualan.IdBarang
                        ) AS penjualanQuery ON barangQuery.IdBarang = penjualanQuery.IdBarang
                        INNER JOIN
                        (
                            SELECT pembelian.IdBarang, SUM(pembelian.HargaBeli * pembelian.JumlahPembelian) AS totalPembelian 		FROM pembelian
                            GROUP BY pembelian.IdBarang
                        ) AS pembelianQuery ON barangQuery.IdBarang = pembelianQuery.IdBarang');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $jualBeliBarang) {
        $list[] = new LaporanJualBeli($jualBeliBarang['IdBarang'], 
                                      $jualBeliBarang['NamaBarang'],  
                                      $jualBeliBarang['TotalPenjualan'],  
                                      $jualBeliBarang['TotalPembelian'], 
                                      $jualBeliBarang['Laba']);
      }

      return $list;
    }
  }
?>