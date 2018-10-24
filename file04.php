<?php
    $nama = "data.txt";
    $handle = fopen($nama, "r");
    if(!$handle):
        echo "<b>File tidak dapat dibuka atau belum ada</b>";
    else:
        $isi = fgets ($handle, 208);
        // $isi2 = fread ($handle, 20);
        echo "Isi file [1]: $isi <br>";
        // echo "Isi file [2]: $isi2 <br>";
    endif;
    fclose($handle);
?>