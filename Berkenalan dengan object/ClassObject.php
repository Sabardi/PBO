<?php 
//object dasar start

class Matimatika {
    function perkalian(){
        echo "perkalian <br>";
    }
 }
$hitungperkalian = new Matimatika();
echo $hitungperkalian->perkalian();

// Object dasar end
echo "=== <u> Property dan method </u>==== <br>"; //
//property dan method start
class product  {
    
    // property 
    //ada 2 opsi memberikan nilai langsung dan bisa tidak
    public $No = "001"; //dinamakan Access modifier yang bisa di akses darimanapun
    public $merek = "politron";
    public $harga = 5000;
    
    //method
    function PesanProduk(){
            echo "Produk yang di pesan";
    }
}
$tv = new product();
$tv ->No = "002"; //pemberian nilai pada property nya 
$tv ->merek = "Samsung";
$tv ->harga = 30000;

echo "No : $tv->No";//untuk mengakses property dan method di dalam sebuah object menggunakan (->)tanda panah 
echo "<br>";
echo "merek : $tv->merek";
echo "<br>";
echo "merek : $tv->harga";
echo "<br>";

$speker = new product();
$speker->No = 0003;
$speker->merek = "jbl";
$speker->No = 20000;
echo $speker->No;
echo "<br>";
echo $speker->merek;
echo "<br>";
echo $speker->harga;
echo "<br>";
echo $tv->PesanProduk();//pemangilan method nya
//property dan method end



?>