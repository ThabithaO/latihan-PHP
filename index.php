<?php
    echo "Selamat belajar PHP Dasar";
    echo "<br>";
    // proses assigment (pengisian nilai awal)
    $a = 5;
    $b = 5;

    // proses aritmatika
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $modulo = $a % $b;
    $boolean = ($a < $b) ? "true" : "false";

    // proses print output
    echo "Penjumlahan : ". $a ." + ". $b ." = ". $penjumlahan;
    echo "<br>";
    echo "Pengurangan : ". $a ." - ". $b ." = ". $pengurangan;
    echo "<br>";
    echo "Perkalian : ". $a ." * ". $b ." = ". $perkalian;
    echo "<br>";
    echo "Pembagian : ". $a ." / ". $b ." = ". $pembagian;
    echo "<br>";
    echo "modulo : ". $a ." % ". $b ." = ". $modulo;
    echo "<br>";
    echo "boolean : ". $a ." < ". $b ." = ". $boolean;
    echo "<br>";

    if ($a < $b) {
        echo "Benar";
    } else {
        echo "Salah";
    }
?>