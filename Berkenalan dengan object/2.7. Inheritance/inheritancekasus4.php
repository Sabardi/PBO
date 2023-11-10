<?php

class Produk{

    public $sku;
    public $stok;    
}

class Telvisi extends Produk{
    public $UkuranLayar;
}

class MesinCuci extends Produk{
    public $kapasitas;
}

class Speaker extends Produk{
    public $konfigurasi;
}

$produk01 = new Telvisi();
$produk02 = new MesinCuci();
$produk03 = new Speaker();


?>