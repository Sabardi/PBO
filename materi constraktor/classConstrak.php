<?php
class Manusia{
    public $Nama;
    public $hobi;

    function PanggilNama($Nama){
        $this->nama = $Nama;
    }
    function TampilNama($hobi){
        return $this->nama ."dan Hobi nya :". $hobi; 
    }
}

$Namanya = new Manusia();
// $Namanya->nama = "asep";

echo $Namanya->PanggilNama("burhan");
echo $Namanya->TampilNama("JAJA");
?>