<?php
class Manusia{
    //properti 

    //method
    function Makan() {
        echo "Manusia makan 3 kali dalam sehari <br>";
    }
    function Jalan(){
        echo "jalan setiap hari <br>";
    }
    function Pekerjaan(){
        echo "pekerjaan <br>";
    }
}
$nama = new Manusia();
echo $nama->Makan();
echo $nama->Jalan();
echo $nama->Pekerjaan();

class Buah{
    function NamaBuah(){
        echo "Buah buah an <br>";
    }function WarnaBuah(){
        echo "Buah buah biasa nya berwarna merah <br>";
    }
}   

$namabuah = new Buah();
$warna = new Buah();
echo $namabuah->NamaBuah();
echo $warna->WarnaBuah(); 
?>