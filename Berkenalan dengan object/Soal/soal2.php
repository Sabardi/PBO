<?php

use produk as GlobalProduk;

/**
 * saya ingin membuat method tambahstok() ke dalam class Produk.
Sesuai dengan namanya, method ini dipakai untuk menambah nilai $stok. Method
tambahstok() nantinya bisa menerima 1 argumen, yakni jumlah stok yang akan ditambah.
Jika method ini dipanggil tanpa argument, maka dianggap stok bertambah 1 lusin (12
buah).
Karena ukuran gudang yang terbatas, $stok dibatasi maksimal 100 barang. Jika method
tambahstok() dipanggil dan ternyat
 */
class produk{
    public $jenis;
    public $merek;
    public $stok;

    function Pesanproduk(){
        $this->stok = $this->stok -1;
    }

    function Borongproduk($barang){
        $this->stok = $this->stok -$barang;
    }

    function Stokproduk(){
        return " sisa stok ".$this->stok;
    }

    function TambahProduk($barang){
        $totalstok = $this->stok +$barang;
        if ($totalstok <= 100) {
            $this->stok = $totalstok;
            $pesan = "stok berhasil ditambah <br>";
            $pesan = " Jumlah stok saat ini : ".$this->stok." <br>";
        }
        else{
            $pesan = "Maaf, stok sudah penuh. Penambahan stok dibatalkan <br>"; 
            $pesan = "Jumlah stok saat ini: ".$this->stok."<br>"; 
        }
        return $pesan;
    }   

}

$produk1 = new Produk();
$produk1->jenis = "motor";
$produk1->merek = "supra";
$produk1->stok = 100;

echo $produk1->pesanProduk();
echo $produk1->pesanProduk();
echo $produk1->pesanProduk();

//borong produk
echo $produk1->BorongProduk(70);
echo $produk1->Stokproduk();

//tambah stok
$produk1->jenis = "mesin cuci";
$produk1->merek = "samsung";
$produk1->stok = 100;

echo $produk1->TambahProduk(10);
echo $produk1->TambahProduk(30);
echo $produk1->TambahProduk(30);
echo $produk1->Stokproduk();
echo $produk1->TambahProduk(100);//gagal masuk ke stok



?>