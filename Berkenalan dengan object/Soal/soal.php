<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;
use produk as GlobalProduk;

/**
 * todo
1. Buatlah sebuah class dengan nama Produk. 
2. Class Produk ini memiliki 3 buah property:$jenis, $merek, dan $stok, 
3. serta 2 buah method: pesanProduk() dan cekStok().
4. Property $jenis dan $merek dipakai untuk menampung data string dan stok  untuk data integer.
5. Pada saat method pesanProduk() dipanggil, ini akan mengurangi stok 1 buah
6. Method cekStok() bisa dipakai untuk menampilkan sisa stok yang ada
 */

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
 echo $motor->cekStok();

?>