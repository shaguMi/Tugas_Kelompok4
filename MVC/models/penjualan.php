<?php
  class Penjualan {
    // we define 35 attributes
    
    public $idPenjualan;
    public $idBarang;
    public $jumlahPenjualan;
    public $hargaJual;
    public $idPengguna;

    public function __construct($idPenjualan,$idBarang, $jumlahPenjualan, $hargaJual, $idPengguna) {
      $this->idPenjualan = $idPenjualan;
      $this->idBarang = $idBarang;
      $this->jumlahPenjualan = $jumlahPenjualan;
      $this->hargaJual = $hargaJual;
      $this->idPengguna = $idPengguna;
    }

    public function update($idPenjualan,$idBarang, $jumlahPenjualan, $hargaJual, $idPengguna){
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE penjualan SET IdPenjualan = ?, JumlahPenjualan = ?, Hargajual = ?, IdPengguna = ? WHERE IdPenjualan = ?');
        $req->execute([$idPenjualan,$idBarang, $jumlahPenjualan, $hargaJual, $idPengguna, $idPenjualan]);
      }

    public static function delete($idPenjualan){
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM penjualan WHERE IdPenjualan = ?');
        $req->execute([$idPenjualan]);
      }

    public static function add($idPenjualan,$idBarang, $jumlahPenjualan, $hargaJual, $idPengguna){
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO penjualan(IdPenjualan, IdBarang,JumlahPenjualan, Hargajual, IdPengguna) VALUES (?,?,?,?) ');
        $req->execute([$idPenjualan,$idBarang, $jumlahPenjualan, $hargaJual, $idPengguna]);
      }


    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM penjualan');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $penjualan) {
        $list[] = new Penjualan($penjualan['IdPenjualan'], $penjualan['IdBarang'], $penjualan['JumlahPenjualan'], $penjualan['Hargajual'], $penjualan['IdPengguna']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $req = $db->prepare('SELECT * FROM penjualan WHERE IdPenjualan = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $penjualan = $req->fetch();

      return new Penjualan($penjualan['IdPenjualan'], $penjualan['IdBarang'], $penjualan['JumlahPenjualan'], $penjualan['Hargajual'], $penjualan['IdPengguna']);
    }
  }
?>