<?php

class produk{
    public $sku;
    public $stok;
}

class televisi extends produk{
    public $ukuran_layar;
}
class mesincuci extends produk{
    public $kapasitas;
}
class speker extends produk{
    public $konfigurasi;
}

$produk01 = new Televisi();
$produk02 = new MesinCuci();
$produk03 = new speker();

var_dump( is_a($produk01, "produk"));
var_dump( is_a($produk02, "Televisi"));
var_dump( is_a($produk01, "produk"));
var_dump( is_a($produk03, "Televisi"));
var_dump( is_a($produk04, "Speaker"));


?>