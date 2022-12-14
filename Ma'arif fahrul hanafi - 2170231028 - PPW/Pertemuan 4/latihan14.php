<?php
    if (empty($_POST['nama'])) {
        header("location:latihan15.php");
    } else {
        echo "<center>Nama :".$_POST['nama']."</center><br>";
    }
?>