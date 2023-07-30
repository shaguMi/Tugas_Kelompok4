<?php
  class HomeController {
    public function welcome() {
      require_once('views/home/welcome.php');
    }

    public function error() {
      require_once('views/home/error.php');
    }
  }
?>