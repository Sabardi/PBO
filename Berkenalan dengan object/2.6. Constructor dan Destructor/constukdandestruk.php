<?php
class Panggil{
    function __construct($ucap){ //menambahkan parameter nya
        echo $ucap. " ini adalah construk nya <br>";
    }

    function __destruct(){
        echo "ini adalah Destruk nya <br>";
    }
}
// jika  menggunkaan argumen dan paramater / parameter dan method
$panggil = new Panggil("hallo");
$panggil = new Panggil("apa kabar");
$panggil = null;
echo "program selesai <br>";

?>

