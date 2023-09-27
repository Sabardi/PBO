<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td><label for="">angka1</label></td>
                <td>:</td>
                <td><input type="text" name="angka1" id=""></td>
            </tr>
            <tr>
            <td><label for="">angka2</label></td>
            <td>:</td>
            <td><input type="text" name="angka2" id=""></td>
            </tr>

            <!--pilihan oprator  -->

            <tr>
                <td><button type="submit" name="hitung">Hitung</button></td>
            </tr>
        </table>
    </form>
    <?php
    class matika{
        public $angka1;
        public $angka2;
        public $hitung;

        function angka1(){
            // echo "masukan angka1";
            $this->angka1 = $_POST["angka1"] + $this->angka2 = $_POST["angka2"];
        }

        function angka2(){
            // echo "masukan angka2";
            $this->angka2 = $_POST["angka2"];
        }

        function hitung(){
            echo "hasil hitung nya".$this->hitung = $_POST["hitung"];
        }
    }
$penjumlahan = new matika();
$penjumlahan->angka1();

class penjumlahan{
    // public $angka1;
    // public $angka2;
    // public $hasil;

    function hitung(){
        
    }
}

$penjumlahan = new penjumlahan();

?>
</body>
</html>