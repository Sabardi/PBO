<?php

class produk{
    public $merek = "sony";
}

class Televisi extends produk{
    public $merek = "Panasonic";
    public $merekproduk = parent::merek;
}

$produk01 = new Televisi();
echo $produk01->merekproduk;

?>