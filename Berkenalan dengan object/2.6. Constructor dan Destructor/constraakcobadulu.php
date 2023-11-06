<?php

class produk{
    public $merek;
    public $jenis;
    public $stok;
    function __construct($a, $b, $c = "hallo"){
        $this->merek = $a;
        $this->jenis = $b;
        $this->stok = $c;
    }

}

$produk01 = new produk("samsung", "telvis");
print_r($produk01);
?>