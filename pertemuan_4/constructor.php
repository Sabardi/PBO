<?php
class constark{
    // properti


    // method
    function __construct(){
        echo "ini constract <br>";
    }
 function __destruct()
    {
        echo "ini desktruct";
    }


    function tampilnama(){
        echo "tampil nama  <br>";
    }   

}

$tampil = new constark();
$tampil->tampilnama();

?>