<?php
  class PenjualanController {
    public function list() {
      // we store all the posts in a variable
      $listPenjualan = Penjualan::all();
      require_once('views/penjualan/list.php');
    }

    public function add() {
        if (empty($_POST)) {
          require_once('views/penjualan/add.php');
        }
        else {
          Penjualan::add($_POST['IdPenjualan'],$_POST['IdBarang'],$_POST['JumlahPenjualan'],$_POST['Hargajual'],$_POST['IdPengguna'] );
          $this->list();
        }
      }

    public function delete(){
        Penjualan::delete($_GET['id']);
        $this->list();
      }

    public function update(){
        if (!isset($_GET['id']))
            return call('home', 'error');
  
        $penjualan = Penjualan::find($_GET['id']);
  
        if (empty($_POST)) {
          require_once('views/penjualan/update.php');
        }
        else {
          $penjualan->update($_POST['IdPenjualan'],$_POST['IdBarang'],$_POST['JumlahPenjualan'],$_POST['Hargajual'],$_POST['IdPengguna'] );
          $this->list();
        }
      }

  }
?>