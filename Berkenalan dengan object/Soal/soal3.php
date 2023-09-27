<?php

use produk as GlobalProduk;

class Produk{
    // properti
    public $jenis;
    public $merek;
    public $stok;

    //method
    function pesanProduk(){
        $this->stok = $this->stok -1;// stok sama dengan stok untuk mengurangi jumlah stok nya
    }
    
    function BorongProduk($jumlah = 10){ //$jumlah merupakan parameter //meskipun di berikan nilai deful yang akan tetep di jalankan ialah parameter yang di isi
        $this->stok = $this->stok - $jumlah;
    }

    function cekStok(){
        return " sisa stok = ".$this->stok. "<br>";
    }

    public function TambahProduk($jumlah = 10){ //jika di berikan value langsung
        $totalstok = $this->stok + $jumlah;
        if($totalstok <= 100){
            $this->stok = $totalstok;
            $pesan = "stok berhasil di tambah <br>";
            $pesan = "Jumlah stok saat ini :".$this->stok. "<br>";
        }
        else {
            $pesan = "Maaf, stok sudah penuh. Penambahan stok dibatalkan <br>";
            $pesan = "Jumlah stok saat ini :".$this->stok. "<br>";
        }
        return $pesan;
    }
 }

 
//  $motor = new Produk();
//  $motor->jenis = "motor";
//  $motor->merek = "supra";
//  $motor->stok = 100;
 
//  echo "Jumlah produk : $motor->stok <br>";
//  echo $motor->pesanProduk();
//  echo $motor->pesanProduk();
//  echo $motor->cekStok();//sisa dari produk setelah di panggil beberapa kali
 
//  /*membuat method
//  borongProduk(). Jika pada pesanProduk() hanya bisa memesan 1 buah produk saja, pada
//  method borongProduk() ini bisa membeli banyak produk sekaligus. Jumlah produk yang dibeli
//  nantinya akan menjadi sebuah argument*/
 
//  echo "sisa motor di Borong ".$motor->BorongProduk(10);// sisa stok nya
//  echo "sisa motor di Borong ".$motor->BorongProduk(40);// sisa stok nya
//  echo "sisa motor di Borong ".$motor->BorongProduk(10);// sisa stok nya
//  echo $motor->cekStok();

//  //proses pemanggilan penambahan stok
// echo "<h1>produk baru <br></h1>";
// $ac = new Produk();
// $ac->jenis = "motor";
// $ac->merek = "kipas";
// $ac->stok = 30;
// echo "stok nya : ".$ac->stok."<br>";

// $ac->TambahProduk();
// $ac->TambahProduk(90);
// echo "stok nya : ".$ac->stok;

$produk01 = new Produk();
$produk01->jenis = "Televisi";
$produk01->merek = "Samsung";
$produk01->stok = 80;

echo $produk01->TambahProduk();
echo "<br>";
echo $produk01->TambahProduk(20);
// echo "<br>";
// echo $produk01->TambahProduk(15);


 ?>