<?php
  class LaporanJualBeliController {
    public function list() {
      $listLaporanJualBeli = LaporanJualBeli::all();
      require_once('views/laporanJualBeli/list.php');
    }
  }
?>