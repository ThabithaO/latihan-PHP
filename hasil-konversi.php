<?php
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];

    echo "Konversi Nilai Mahasiswa";
    echo "<br><br>";
    echo "Nama = ". $nama;
    echo "<br>";
    if ($nilai > 85 && $nilai <= 100) {
      echo "Nilai Anda adalah = A";
    } elseif ($nilai > 75 && $nilai <= 85) {
      echo "Nilai Anda adalah = B";
    } elseif ($nilai > 50 && $nilai <= 75) {
      echo "Nilai Anda adalah = C";
    } elseif ($nilai > 30 && $nilai <= 50) {
      echo "Nilai Anda adalah = D";
    } elseif ($nilai >= 0 && $nilai <= 30) {
      echo "Nilai Anda adalah = E";
    } else {
      echo "Error";
    }
?>