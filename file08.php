<?php
    $dir = "images";
    $cek = mkdir($dir);
    if ($cek) {
        # code...
        echo "Direktori <b>$dir</b> berhasil dibuat";
    } else {
        echo "Direktori <b>$dir</b> gagal dibuat";
    }
?>