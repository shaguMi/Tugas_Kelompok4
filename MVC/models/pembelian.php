<?php
  class Pembelian {
    // we define 35 attributes
    
    public $idPembelian;
    public $idBarang;
    public $jumlahPembelian;
    public $hargaBeli;
    public $idPengguna;

    public function __construct($idPembelian,$idBarang, $jumlahPembelian, $hargaBeli, $idPengguna) {
      $this->idPembelian = $idPembelian;
      $this->idBarang = $idBarang;
      $this->jumlahPembelian = $jumlahPembelian;
      $this->hargaBeli = $hargaBeli;
      $this->idPengguna = $idPengguna;
    }

    public function update($idPembelian,$idBarang, $jumlahPembelian, $hargaBeli, $idPengguna){
        $db = Db::getInstance();
        $req = $db->prepare('UPDATE pembelian SET IdPembelian = ?, IdBarang = ?,JumlahPembelian = ?, HargaBeli = ?, IdPengguna = ? WHERE IdPembelian = ?');
        $req->execute([$idPembelian, $idBarangidBarang, $jumlahPembelian, $hargaBeli, $idPengguna, $idPembelian]);
      }

    public static function delete($idPembelian){
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM pembelian WHERE IdPembelian = ?');
        $req->execute([$idPembelian]);
      }

    public static function add($idPembelian, $idBarang, $jumlahPembelian, $hargaBeli, $idPengguna){
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO pembelian(IdPembelian, IdBarang, JumlahPembelian, HargaBeli, IdPengguna) VALUES (?,?,?,?,?) ');
        $req->execute([$idPembelian, $idBarang, $jumlahPembelian, $hargaBeli, $idPengguna]);
      }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM pembelian');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $pembelian) {
        $list[] = new Pembelian($pembelian['IdPembelian'], $pembelian['IdBarang'],$pembelian['JumlahPembelian'], $pembelian['HargaBeli'], $pembelian['IdPengguna']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $req = $db->prepare('SELECT * FROM pembelian WHERE idPembelian = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $pembelian = $req->fetch();

      return new pembelian($pembelian['IdPembelian'], $pembelian['IdBarang'],$pembelian['JumlahPembelian'], $pembelian['HargaBeli'], $pembelian['IdPengguna']);
    }
  }
?>