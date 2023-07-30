<?php
  class PembelianController {
    public function list() {
      // we store all the posts in a variable
      $listPembelian = Pembelian::all();
      require_once('views/pembelian/list.php');
    }

    public function add() {
        if (empty($_POST)) {
          require_once('views/pembelian/add.php');
        }
        else {
          Pembelian::add($_POST['IdPembelian'],$_POST['IdBarang'],$_POST['JumlahPembelian'],$_POST['HargaBeli'],$_POST['IdPengguna'] );
          $this->list();
        }
      }

    public function delete(){
        Pembelian::delete($_GET['id']);
        $this->list();
      }

    public function update(){
        if (!isset($_GET['id']))
            return call('home', 'error');
  
        $pembelian = Pembelian::find($_GET['id']);
  
        if (empty($_POST)) {
          require_once('views/pembelian/update.php');
        }
        else {
          $pembelian->update($_POST['IdPembelian'],$_POST['IdBarang'],$_POST['JumlahPembelian'],$_POST['HargaBeli'],$_POST['IdPengguna'] );
          $this->list();
        }
      }

  }
?>