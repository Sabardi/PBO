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

    <?php


class penjumlahan {
    var $angka1;
    var $angka2;
    var $hasil;
    function hasil(){
        echo $this->hasil = $this->angka1 = $_POST["angka1"] + $this->angka2 = $_POST["angka2"];
    }
}

class pengurangan {
    var $angka1;
    var $angka2;
    var $hasil;
    function hasil(){
        echo $this->hasil = $this->angka1 = $_POST["angka1"] - $this->angka2 = $_POST["angka2"];
    }
}

class perkalian {
    var $angka1;
    var $angka2;
    var $hasil;
    function hasil(){
        echo $this->hasil = $this->angka1 = $_POST["angka1"] * $this->angka2 = $_POST["angka2"];
    }
    
}

class pembagian {
    var $angka1;
    var $angka2;
    var $hasil;
    function hasil(){
        echo $this->hasil = $this->angka1 = $_POST["angka1"] / $this->angka2 = $_POST["angka2"];
    }
}
if($_POST["oprasi"]=="penjumlahan"){
    $penjumlahan = new penjumlahan();
    $penjumlahan->hasil();

}elseif($_POST["oprasi"]=="pengurangan"){
    $penjumlahan = new pengurangan();
    $penjumlahan->hasil();
}
elseif($_POST["oprasi"]=="perkalian"){
    $penjumlahan = new perkalian();
    $penjumlahan->hasil();

}elseif($_POST["oprasi"]=="pembagian"){
    $penjumlahan = new pembagian();
    $penjumlahan->hasil();
}
?>
</body>
</html>