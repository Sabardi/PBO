<?php
class produk{
    public $jenis;
    public $merek;
    public $stok;

    public function PesanProduk(){
        $this->stok = $this->stok -1;
    }
    
    public function BorongProduk($jumlah = 10) { //melakukan pembuatan parameter jumlah yang menampung nilai dari argumen nya
        $this->stok = $this->stok -$jumlah; //jika di berikan nilai nya defult di dalam parameter nya nilai nya akan otomatis ada
    }
    public function CekStok() {
        return "sisa stok nya adalah : ". $this->stok ."<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 100;

echo $produk01->CekStok(); // stok nya adalah 100
$produk01->BorongProduk(); //tampa mengisi argumen nya nilai nya udah defult di inputkan di parameter nya
echo $produk01->CekStok(); //sisa stok nya adalah 45
$produk01->BorongProduk(20);
echo $produk01->CekStok(); //sisa stok yang dibli 
$produk01->BorongProduk(20);
echo $produk01->CekStok(); //sisa stok yang dibli 


?>