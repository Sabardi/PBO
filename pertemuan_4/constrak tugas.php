<?php

class Manusia{
    public $Makan;

    function __construct($Makan){
        echo "aku biasa nya Makan ".$this->Makan = $Makan. " dan ini menjadi destruk nya <br>";
    }

    function __destruct(){
        echo "ini adalah destruk nya";
    }

    function Namakanan($nama){
        return "aku bisa nya hanya makan : ".$this->Makan = $nama."<br>";
    }
}

$akumakan = new Manusia("apel");
echo $akumakan->Namakanan("apel saja");

?>