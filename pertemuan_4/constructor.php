<?php
class constark{
    // properti
    public $Nama;
    public $pekerjaan;
    public $judul;
    
    // method
    //ini constak nya
    function __construct($judul){
        echo "<h1>Ini matakuliah " . $this->judul = $judul . "<br>";
    }
    
    // ini destruknya
    function __destruct(){
        echo "ini desktruct nya ";
    }
    //menampilkan judul yang di kirim ke constrak
    function Tampiljudul(){
        return $this->judul;
    }

    function BerinamaDanpekerjaan($Nama, $pekerjaan){
        echo "<b>Nilai dari argumen dan parameter Nama dan pekerjaan</b> <br>";
        $this->Nama = $Nama;
        $this->pekerjaan = $pekerjaan;

    }
    // melakukan pemanggilan dari berinama pekerjaan
    function PanggilnamaDanpekerjaan() {
        return "nama nya adalah : ". $this->Nama. " dan Pekerjaan nya : ". $this->pekerjaan . "<br>";
    }

}

$tampil = new constark("Belajar constrak</h1>");
// $tampil->Tampiljudul();
$tampil->BerinamaDanpekerjaan("Asep", "Guru");
echo $tampil->PanggilnamaDanpekerjaan();
?>