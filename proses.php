<?php

    // tranformasi
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $universitas = $_POST["universitas"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $foto = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];

    $fotobaru = date("dmYHis").$foto;
    $path = "images/". $fotobaru;
    $link_foto = $path;

    if(!move_uploaded_file($tmp, $path)) {
        echo "Upload File Gagal";
    }

    include("hasilform.php");
?>