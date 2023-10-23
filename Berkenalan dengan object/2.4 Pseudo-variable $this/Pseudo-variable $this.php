<?php 
class produk{
    //property
    public $jenis;
    public $merek;

    //method
    function PesananProdukTv(){
        return $this->jenis."Telvisi di pesan<br>";
    }
    function PesananMesinCuci(){
        return "Mesin cuci di pesan";
    }
    function PesananProduk(){
        return "jenis kendaraan ".$this->jenis. "  dan merek nya  ".$this->merek;
    }
}

$produk001 = new produk();
$produk001->jenis = "telvisi <br>";
$produk001->merek = "Samsul <br>";

echo "Jenis barang : $produk001->jenis";
echo "merek barang : $produk001->merek";
echo $produk001->PesananProdukTv();

$produk002 = new produk();
$produk002->jenis = "mesin cuci <br>";
$produk002->merek = "samsul <br>";

echo "Jenis barang : $produk002->jenis";
echo "merek barang : $produk002->merek";
echo $produk002->PesananMesinCuci();

//merancang method genrik 

$motor = new produk();
$motor->jenis = "motor";
$motor->merek = "honda";
echo "<p>merancang method genrik<p> <br>";
echo $motor->PesananProduk();
$produk003 = new produk();
$produk003->jenis = "motor";
$produk003->merek = "suzuki";
echo "<br>";
echo $produk003->PesananProduk();
?>