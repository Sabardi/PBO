<?php
class produk{
    public $merek = "Sharp";
    public $stok = 90;

    public function cekstok() {
        $merek = $this->merek;
        $stok  = $this->stok ;
        return "merek nya : ". $merek." dan jumlah stok nya :".$stok;
    }    
}

class telvisi extends produk{
    public $jenis = "telvisi";
    
    public function CekStoktelvisi(){
        return "jenis nya : ".$this->jenis. " merek nya : ". $this->merek. " dan stok nya : ". $this->stok;
    }
}

class TelvisiLCD extends telvisi{
    public $tipe = "led";

    public function CekstokTelvisiLCD() {
        return "tipe nya ".$this->tipe. " ". $this->CekStoktelvisi();
    }
}

// $produk01 = new produk();
// echo $produk01->cekstok(1,2);

// jika menggunakan pewarisan
// $produk01 = new telvisi();
// echo $produk01->CekStoktelvisi();

//jika menggunakan cucu nya
$produk01 = new produk();
echo $produk01->cekstok();
echo "<br>";

$produk02 = new telvisi();
echo $produk02->CekStoktelvisi();
echo "<br>";

$produk03 = new TelvisiLCD();
echo $produk01->merek;
echo "<br>";
echo $produk02->jenis;
echo "<br>";
echo $produk03->CekstokTelvisiLCD();

?>