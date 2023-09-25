<?php 
//object dasar start
 class Matimatika {

    function perkalian(){
        echo "perkalian <br>";
    }

    function pembagian(){
        echo "pembagian";
    }
 }
$hitungperkalian = new Matimatika();
$hitungpembagian = new Matimatika();
echo $hitungperkalian->perkalian();
echo $hitungpembagian->perkalian();

// Object dasar end
echo "<br>"; //



?>