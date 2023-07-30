<?php
  class Barang {
    // we define 35 attributes
    
    public $idBarang;
    public $namaBarang;
    public $keterangan;
    public $satuan;
    public $idPengguna;
    public $hargaBeli;
    public $hargaJual;

    public function __construct($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna,$hargaBeli,$hargaJual) {
      $this->idBarang = $idBarang;
      $this->namaBarang = $namaBarang;
      $this->keterangan = $keterangan;
      $this->satuan = $satuan;
      $this->idPengguna = $idPengguna;
      $this->hargaBeli = $hargaBeli;
      $this->hargaJual = $hargaJual;
    }

    public function update($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna,$hargaBeli,$hargaJual){
      $db = Db::getInstance();
      $req = $db->prepare('UPDATE barang SET IdBarang = ?, NamaBarang = ?, Keterangan = ?, Satuan = ?, IdPengguna = ?, hargaBeli = ?, hargaJual = ? WHERE IdBarang = ?');
      $req->execute([$idBarang, $namaBarang, $keterangan, $satuan, $idPengguna,$hargaBeli,$hargaJual, $idBarang]);
    }

    public static function delete($idBarang){
      $db = Db::getInstance();
      $req = $db->prepare('DELETE FROM barang WHERE IdBarang = ?');
      $req->execute([$idBarang]);
    }

    public static function add($idBarang, $namaBarang, $keterangan, $satuan, $idPengguna, $hargaBeli, $hargaJual){
      $db = Db::getInstance();
      $req = $db->prepare('INSERT INTO barang(IdBarang, NamaBarang, Keterangan, Satuan, IdPengguna, hargaBeli,hargaJual) VALUES (?,?,?,?,?,?,?) ');
      $req->execute([$idBarang, $namaBarang, $keterangan, $satuan, $idPengguna, $hargaBeli, $hargaJual]);
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM barang');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $barang) {
        $list[] = new Barang($barang['IdBarang'], $barang['NamaBarang'], $barang['Keterangan'],  $barang['Satuan'],  $barang['IdPengguna'],$barang ['hargaBeli'],$barang['hargaJual']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$id = intval($id);
      $req = $db->prepare('SELECT * FROM barang WHERE idBarang = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $barang = $req->fetch();

      return new Barang($barang['IdBarang'], $barang['NamaBarang'], $barang['Keterangan'], $barang['Satuan'],$barang['IdPengguna'],$barang ['hargaBeli'],$barang['hargaJual']);
    }
  }
?>