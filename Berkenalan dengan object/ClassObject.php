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
    public $No = "001"; //dinamakan Access modifier yang bisa di akses darimanapun
    public $merek = "politron";
    public $harga = 5000;
    
    //method
    function PesanProduk(){
            echo "Produk yang di pesan";
    }
}
$tv = new product();
echo "No : $tv->No";//untuk mengakses property dan method di dalam sebuah object menggunakan (->)tanda panah 
echo "<br>";
echo "merek : $tv->merek";
echo "<br>";
echo "merek : $tv->harga";
echo "<br>";
echo $tv->PesanProduk();//pemangilan method nya
//property dan method end



?>