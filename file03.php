<?php
    $nama = "data.txt";
    $handle = fopen($nama, "w");
    if (!$handle):
        # code...
        echo "<b>File tidak dapat dibuka atau belum ada</b>";
    else:
        # code...
        fwrite($handle, "Fakultas Teknologi Informasi\n");
        fputs($handle, "Universitas Assalaam Bandung\n");
        echo "<b>File berhasil dibuka</b>";
    endif;
    fclose($handle);
?>