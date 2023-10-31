<?php

use produk as GlobalProduk;

class Produk{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($a, $b, $c){
        $this->jenis = $a;
        $this->merek = $b;
        $this->stok = $c;
    }
    public function Tampil() {
        return "Jenis nya ".$this->jenis. " dan merek nya ". $this->merek. " jumlah stok nya ". $this->stok;
    }
}

$produk01 = new Produk("telvisi","samsung",30);
print_r($produk01);
echo $produk01->Tampil();

?>