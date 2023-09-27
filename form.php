<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table align="center">
            <tr>
                <td><label for="">angka1</label></td>
                <td>:</td>
                <td><input type="number" name="angka1" id="" placeholder="Masukan nilai nya"required></td>
            </tr>
            <tr>
            <td><label for="">angka2</label></td>
            <td>:</td>
            <td><input type="number" name="angka2" id="" placeholder="Masukan nilai nya" required></td>
            </tr>
            <tr>
                <td>
                    <!--pilihan oprator  -->
                    <label for="">pilih oprasi</label>
                    <select name="oprasi" id="">
                        <option value="penjumlahan">penjumlahan</option>
                        <option value="pengurangan">pengurangan</option>
                        <option value="perkalian">perkalian</option>
                        <option value="pembagian">pembagian</option>
                    </select>                    
                </td>
                
            </tr>

            <tr>
                <td><button type="submit" name="hitung">Hitung</button></td>
            </tr>
        </table>
    </form>
    <?php 

//    class penjumlahan{
//     function tampil(){
//         $a = $_POST["angka1"];
//         $b = $_POST["angka2"];
//         $total = $a * $b;
//         echo "Hasil nya : ".$total;
        
//     }
//    }
//    $hitung1 = new Penjumlahan();
//    echo $hitung1->tampil();


class penjumlahan {
    var $angka1;
    var $angka2;
    var $hasil;

    function penjumlahan(){
        if($_POST["oprasi"]=="penjumlahan"){
            echo $this->hasil = $this->angka1 = $_POST["angka1"] + $this->angka2 = $_POST["angka2"];
        }elseif($_POST["oprasi"]=="pengurangan"){
            echo $this->hasil = $this->angka1 = $_POST["angka1"] - $this->angka2 = $_POST["angka2"];
        }elseif($_POST["oprasi"]=="perkalian"){
            echo $this->hasil = $this->angka1 = $_POST["angka1"] * $this->angka2 = $_POST["angka2"];
        }elseif($_POST["oprasi"]=="pembagian"){
            echo $this->hasil = $this->angka1 = $_POST["angka1"] / $this->angka2 = $_POST["angka1"];
        }
    }
}

// class pengurangan {
//     var $angka1;
//     var $angka2;
//     var $hasil;

//     function pengurangan(){
//         if($_POST["oprasi"]=="pengurangan"){
//             echo $this->hasil = $this->angka1 = $_POST["angka1"] - $this->angka2 = $_POST["angka1"];
//         }
//     }
// }


$penjumlahan = new penjumlahan();
// $hasil->angka1 = 10;
// $hasil->angka1 = 20;
$penjumlahan->penjumlahan();

// $pengurangan = new pengurangan();
// $pengurangan->pengurangan();
?>

</body>
</html>