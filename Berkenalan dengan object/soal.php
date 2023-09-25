<?php 
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
        return $this->$jenis;
    }

    function cekStok(){
        
    }
 }

 $mot
?>