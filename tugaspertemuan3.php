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
                                        
                </td>
                <td>:</td>
                <td>
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

    <table align="center">
        <tr>
                <td><label for="">Hasil nya</label></td>
                <td>:</td>
                <td><textarea name="hasil" id="hasil" cols="20" rows="10" ></textarea>
                </td>
            </tr>
    </table>

    <?php


class penjumlahan {
    var $angka1;
    var $angka2;
    var $hasil;
    function hasil(){
        $this->hasil =$_POST["hasil"] = $this->angka1 = $_POST["angka1"] + $this->angka2 = $_POST["angka2"];
        echo "Hasil nya : ".$this->hasil = $_POST["hasil"];
    }
}

class pengurangan {
    var $angka3;
    var $angka4;
    var $hasil;
    function hasil(){
        echo "Hasil nya : ".$this->hasil = $this->angka3 = $_POST["angka1"] - $this->angka4 = $_POST["angka2"];
    }
}

class perkalian {
    var $angka5;
    var $angka6;
    var $hasil;
    function hasil(){
        echo "Hasil nya : ". $this->hasil = $this->angka5 = $_POST["angka1"] * $this->angka6 = $_POST["angka2"];
    }
    
}

class pembagian {
    var $angka7;
    var $angka8;
    var $hasil;
    function hasil(){
        echo "Hasil nya : ". $this->hasil = $this->angka7 = $_POST["angka1"] / $this->angka8 = $_POST["angka2"];
    }
}
if($_POST["oprasi"]=="penjumlahan"){
    $penjumlahan = new penjumlahan();
    $penjumlahan->hasil();

}elseif($_POST["oprasi"]=="pengurangan"){
    $pengurangan = new pengurangan();
    $pengurangan->hasil();
}
elseif($_POST["oprasi"]=="perkalian"){
    $perkalian = new perkalian();
    $perkalian->hasil();

}elseif($_POST["oprasi"]=="pembagian"){
    $pembagian = new pembagian();
    $pembagian->hasil();
}
?>
</body>
</html>