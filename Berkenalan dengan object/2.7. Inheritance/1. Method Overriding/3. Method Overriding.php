<?php

class produk{

    public function Hello(){
        return "Ini adalah produk <br>";
    }
}

class Telvisi extends produk{
    public function Hello(){
        return "ini dari telvisi";
    }

    public function helloProduk(){
        return parent::Hello();
    }
}


$produk01 = new Telvisi();
echo $produk01->helloProduk();
?>