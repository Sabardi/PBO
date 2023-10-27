<?php 
class produk{
    public $jenis;
    public $merek;
    public $stok;

    public function pesanproduk() {
        $this->stok = $this->stok -1;
    }
    public function borongproduk($jumlah) {
        $this->stok = $this->stok - $jumlah;
    }
    public function cekstok(){
        return "sisa stok ". $this->stok;
    }
}

$produk01 = new produk();
$produk01->stok = 20;
$produk01->pesanproduk();
$produk01->pesanproduk();
$produk01->pesanproduk();
$produk01->borongproduk(10);
echo $produk01->cekstok();

?>