<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'home':
        $controller = new HomeController();
      break;
      case 'barang':
        require_once('models/barang.php');
        $controller = new BarangController();
      break;
      case 'penjualan':
        require_once('models/penjualan.php');
        $controller = new PenjualanController();
      break;
      case 'pembelian':
        require_once('models/pembelian.php');
        $controller = new PembelianController();
      break;
      case 'laporanJualBeli':
        require_once('models/laporanJualBeli.php');
        $controller = new LaporanJualBeliController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('home' => ['welcome', 'error', 'dashboard'],
                       'barang' => ['list', 'add', 'delete', 'update'],
                       'penjualan' => ['list', 'add', 'delete', 'update'],
                       'pembelian' => ['list', 'add', 'delete', 'update'],
                       'laporanJualBeli' => ['list']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('home', 'error');
    }
  } else {
    call('home', 'error');
  }
?>