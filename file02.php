<?php
    $nama = "data.txt";
    $handle = fopen($nama, "w");
    if (!$handle):
        # code...
        echo "<b>File tidak dapat dibuka atau belum ada</b>";
    else:
        # code...
        echo "<b>File berhasil dibuka</b>";
    endif;
?>