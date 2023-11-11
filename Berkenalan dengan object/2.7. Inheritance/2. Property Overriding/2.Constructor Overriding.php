<?php


class produk{
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis,$merek,$stok){
        $this->jenis=$jenis;
        $this->merek=$merek;
        $this->stok=$stok;
    }
}

class Telvisi extends produk{ //akan mewarisi apapun yang ada di induk nya / di class produk

    //bagaimana jika di clas Telvisi ada constak juga
    // public function __construct($jenis, $merek, $stok){ /* terjadi 
    //     constructor overriding, dimana constructor child class akan mengambil alih constructor 
    //     parent class. Meskipun pada saat proses instansiasi $produk01 tetap ada argument, tapi ini 
    //     tidak sampai ke constructor class Produk
    //     ada 2 cara untuk mengatasi masalah ini
    //     1. membuat ulang constrak nya
    //     2. memanggil construktor produk dari dalam kelas Telvisi*/
        

    //Cara pertama
    //     $this->jenis=$jenis;
    //     $this->merek=$merek;
    //     $this->stok=$stok;
    // }


    //cara ke 2
    public function __construct($jenis,$merek,$stok){
        parent::__construct($jenis,$merek,$stok);
    }
}

// $produk0 = new produk("j","samsung",20);
// echo "<pre>";
// print_r($produk0);
// echo "</pre>";

$produk01 = new Telvisi("Telvisi","samsung",20);
echo "<pre>";
print_r($produk01);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

class produk1{
    public $jenis;
    public $merek;
    public $stok;
    public function __construct($jenis,$merek,$stok){
        $this->jenis = $jenis;
        $this->merek=$merek;
        $this->stok=$stok;
    }
}

class Telvisi2 extends produk1{
    public $ukuran_layar;
    public function __construct($jenis,$merek,$stok, $ukuran_layar){
        // $this->jenis = $jenis;
        // $this->merek = $merek;
        // $this->stok = $stok;
        // $this->ukuran_layar=$ukuran_layar;
    

        // atau bisa menggunakan cara ke 2 supaya tidak terjadi duplikasi

        parent::__construct($jenis,$merek,$stok);
        $this->ukuran_layar = $ukuran_layar;
    }
}

$produk02 = new Telvisi2("telvisi","samsung",20,40);
echo "<pre>";
print_r($produk02);
echo "</pre>";
?>