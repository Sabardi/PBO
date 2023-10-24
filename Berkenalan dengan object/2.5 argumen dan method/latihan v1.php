<!-- # Exercise
 Latihan ini adalah tentang pembuatan method dengan argument, tapi saya ingin sedikit 
lebih kompleks.
 Kasusnya seperti ini, saya ingin membuat method tambahstok() ke dalam class Produk. 
Sesuai dengan namanya, method ini dipakai untuk menambah nilai $stok. Method 
tambahstok() nantinya bisa menerima 1 argumen, yakni jumlah stok yang akan ditambah.
 Jika method ini dipanggil tanpa argument, maka dianggap stok bertambah 1 lusin (12 
buah).
 Karena ukuran gudang yang terbatas, $stok dibatasi maksimal 100 barang. Jika method 
tambahstok() dipanggil dan ternyata itu akan melewati 100 stok, batalkan penambahan 
dan tampilkan pesan kesalahan. -->
<?php

use produk as GlobalProduk;

class Produk{
    public $jenis;
    public $merek;
    public $stok;
    
    public function TambahStok($jumlah = 12) {
        $TotalStok = $this->stok +$jumlah;
        // echo "Total stok : $TotalStok";
        if ($TotalStok <=100) {
            $this->stok = $TotalStok;
            $pesan = "stok berhasil di tambahkan <br>";
            $pesan = "jumlah stok saat ini : ".$this->stok."<Br>";
        }
        else {
            $pesan = "Maaf, stok sudah penuh. Penambahan stok dibatalkan <br>";
            $pesan .= "jumlah stok saat ini : ".$this->stok;
        }
        return $pesan;
    }
}

$produk = new Produk();
$produk->jenis ="Hp";
$produk->merek ="vivo";
// $produk->stok = 50;
$produk->stok = 50; //jk di kasih nilai method nya nanti bakalan di hitung juga

echo $produk->TambahStok(20);
echo $produk->TambahStok(20);
echo $produk->TambahStok(20);
echo $produk->TambahStok(20);


?>