<?php
  class BarangController {
    public function list() {
      $listBarang = Barang::all();
      require_once('views/barang/list.php');
    }

    public function add() {
      if (empty($_POST)) {
        require_once('views/barang/add.php');
      }
      else {
        Barang::add($_POST['IdBarang'],$_POST['NamaBarang'],$_POST['Keterangan'],$_POST['Satuan'],$_POST['IdPengguna'],$_POST['HargaBeli'],$_POST['HargaJual'] );
        $this->list();
      }
    }

    public function delete(){
      Barang::delete($_GET['id']);
      $this->list();
    }

    public function update(){
      if (!isset($_GET['id']))
          return call('home', 'error');

      $barang = Barang::find($_GET['id']);

      if (empty($_POST)) {
        require_once('views/barang/update.php');
      }
      else {
        $barang->update($_POST['IdBarang'],$_POST['NamaBarang'],$_POST['Keterangan'],$_POST['Satuan'],$_POST['IdPengguna'],$_POST['HargaBeli'],$_POST['HargaJual'] );
        $this->list();
      }
    }
  }
?>