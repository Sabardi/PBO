<?php

// use produk as GlobalProduk;

class produk{
    //property
    public $merek = "hp";
    public $stock = 10;

    public function CekStok() {
        echo "sisa stok ".$this->stock;
    } 
}

class telvisi extends produk{
    public $merek = "Samsung";
    public $jenis = " micrpo";
}

$stoknya = new Produk();
// $stoknya->merek = "Televisi";
// $stoknya->stock = 10;
$stoknya->CekStok();
?>