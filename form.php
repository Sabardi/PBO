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
                <td><input type="number" name="angka1" id="" placeholder="Masukan nilai nya"></td>
            </tr>
            <tr>
            <td><label for="">angka2</label></td>
            <td>:</td>
            <td><input type="number" name="angka2" id="" placeholder="Masukan nilai nya"></td>
            </tr>
            <tr>
                <td>
                    <!--pilihan oprator  -->

                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">penjumlahan</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> perkalian</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3">pembagian</label>
                    
                </td>
                
            </tr>

            <tr>
                <td><button type="submit" name="hitung">Hitung</button></td>
            </tr>
        </table>
    </form>
    <?php 

   class penjumlahan{
    function tampil(){
        $a = $_POST["angka1"];
        $b = $_POST["angka2"];
        $total = $a * $b;
        echo "Hasil nya : ".$total;
        
    }
   }
   $hitung1 = new Penjumlahan();
   echo $hitung1->tampil();
?>

</body>
</html>