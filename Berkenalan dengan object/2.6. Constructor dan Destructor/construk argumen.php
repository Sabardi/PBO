<?php


class produk{
    
    public $jenis;
    public $merek;
    public $stok;

    function __construct($a,$b,$c){
        echo  "jenis nya adalah : ". $this->jenis = $a ." Dan merek nya : ". $this->merek = $b." dan jumlah stok nya ". $this->stok = $c . "<br>";
        
    }

    function berinama($jenis,$merek,$stok){
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
    function Tampil(){
        return "jenis nya adalah : ". $this->jenis ." Dan merek nya : ". $this->merek." dan jumlah stok nya ". $this->stok;
    }
}
$produk01 = new produk("sayur","kangkung","20 ikat");
$produk01->berinama("buah","apel",20);
echo $produk01->Tampil();

?>