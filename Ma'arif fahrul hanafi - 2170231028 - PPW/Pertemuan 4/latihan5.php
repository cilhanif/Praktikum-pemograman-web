<html>
    <head>
        <title>LUAS PERSEGI PANJANG></title>
    </head>
    <body>
        <h1>Ma'arif fahrul hanafi</h1>
        <h3> APLIKASI PENGHITUG LUAS PERSEGI PANJANG </h3>
        <form actiton="" method="post">
            <table border=0>
                <tr>
                    <td>Panjang persegi panjang
                    <td>:
                    <td><input type="text" name="panjang"><br>
                </tr>
                <tr>
                    <td>Lebar persegi panjang
                    <td>:
                    <td><input type="text" name="lebar"><br>
                </tr>
                <tr>
                    <td><input type="submit" name="input-data" value=Input>
                </tr>
            </table>
        </form>
        <h5> Hasil Perhitungan Luas Persegi Panjang </h5>
        <?php
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
echo "Panjang Persegi Panjang Adalah : $panjang <br>";
echo "Lebar Persegi Panjang Adalah : $lebar <br>";
echo "Rumus : $panjang * $lebar <br>";
echo "Hasil : $luas";
}
?>