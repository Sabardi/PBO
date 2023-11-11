<?php

class produk {
    public function __construct() {
        echo "Hallo ini dari induk nya";
    }
}

class Telvisi extends produk {
    public function __construct() {
        parent::__construct();
    }
}

$p = new Telvisi();
print_r($p);
?>