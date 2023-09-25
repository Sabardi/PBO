<?php
/** todo
 * buatlah object matika 
 * buatlah properti angka1 dan angka2 dan hasil
 * buatlah methot penjumlahan dan hasil
 * angka1 dan angka2 melakukan oprasi aritmatika
 */
class matika{
    public $angka1;
    public $angka2;
    public $hasil;

    function penjumlahan() {
        $this->angka1 + $this->angka2;
    }
    function hasil(){
        return "hasil".$this->hasil();
    }
}
$penjumlahan = new matika();
$penjumlahan->angka1 = 10;
$penjumlahan->angka2 = 10;

echo $penjumlahan->penjumlahan()

?>