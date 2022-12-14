<?php
    include "latihan8.php";
    echo $angka;
    echo "<br>";
    if ($angka==100){
        echo "memuaskan";
    } elseif ($angka<100&&$angka>=85) {
        echo "sangat baik";
    } elseif ($angka<85&&$angka>=78){
        echo "baik";
    } elseif ($angka<78&&$angka>=55){
        echo "cukup";
    } elseif ($angka<55&&$angka>=0){
        echo "kurang";
    }
?>