<!DOCTYPE html>
<html>
    <head>
        <title>konversi tipe</title>
    </head>
    <body>
        <?php
            $a = 300.4;
            echo $a;
            echo "<br>";
            echo "tipe Double : ", Doubleval($a), "<br>";
            echo "tipe Integer: ", Intval($a), "<br>";
            echo "tipe String : ", Strval($a);
        ?>
    </body>
</html>