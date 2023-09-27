<?php
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

    function TambahProduk($jumlah){
        $this->stok = $this->stok + $jumlah;
    }
 }

 $motor = new Produk();
 $motor->jenis = "motor";
 $motor->merek = "supra";
 $motor->stok = 100;
 
 echo "Jumlah produk : $motor->stok <br>";
 echo $motor->pesanProduk();
 echo $motor->pesanProduk();
 echo $motor->pesanProduk();
 echo $motor->pesanProduk();
 echo $motor->cekStok();//sisa dari produk setelah di panggil beberapa kali
 
 /*membuat method
 borongProduk(). Jika pada pesanProduk() hanya bisa memesan 1 buah produk saja, pada
 method borongProduk() ini bisa membeli banyak produk sekaligus. Jumlah produk yang dibeli
 nantinya akan menjadi sebuah argument*/
 
 echo "sisa motor di Borong ".$motor->BorongProduk(10);// sisa stok nya
 echo "sisa motor di Borong ".$motor->BorongProduk(40);// sisa stok nya
 echo "sisa motor di Borong ".$motor->BorongProduk(10);// sisa stok nya
 echo $motor->cekStok();
 
 $motor ->TambahProduk(10);// penambahan produk
 echo $motor->cekStok();
?>