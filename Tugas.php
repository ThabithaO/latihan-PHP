<?php
  // Proses assigment
  $a = 6;
  $b = 3;
  $c = 1/2;
  $d = 2;
  $e = 7;
  $phi = 22/7;
  $nilai = 202;
  
  // Proses aritmetika
  $Luas_persegi_panjang = $a * $b;
  $Luas_segitiga = $a * $b * $c;
  $Keliling_lingkaran = $d * $phi * $e;

  echo "<b>Tugas 5 November 2021</b>";
  echo "<br><br>";
  echo "Luas Persegi Panjang";
  echo "<br>";
  echo "Panjang = ". $a;
  echo "<br>";
  echo "Lebar = ". $b;
  echo "<br>";
  echo "Luas persegi panjang adalah = ". $a ."*". $b ." = ". $Luas_persegi_panjang;
  echo "<br>";
  echo "<br>";

  echo "Luas Segitiga";
  echo "<br>";
  echo "Alas = ". $b;
  echo "<br>";
  echo "Tinggi = ". $a;
  echo "<br>";
  echo "Luas segitiga adalah = ". $c ."*". $b ."*". $a ." = ". $Luas_segitiga;
  echo "<br><br>";

  echo "Keliling Lingkaran";
  echo "<br>";
  echo "Jari-jari = ". $e;
  echo "<br>";
  echo "Keliling lingkaran adalah = ". $d ."*". $phi ."*". $e ." = ". $Keliling_lingkaran;
  echo "<br><br>";

  echo "Konversi Nilai";
  echo "<br>";
  echo "Nilai = ". $nilai;
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


  echo "<br><br>";
  $m = 3;
  $n = 5;
  $arit = $m**2 + $n**2;
  $lain = pow($m, 2) + pow($n, 2);
  $lain2 = pow2($m, 2) + pow2($n, 2);

  echo $arit ."<br>";
  echo $lain ."<br>";
  echo $lain2 . "<br>";

  function pow2($nilai, $pangkat)
  {
    return $nilai ** $pangkat;
  }
?>