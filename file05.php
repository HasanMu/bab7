<?php
    $nama = "data.txt";
    $handle = fopen($nama, "r");
    if(!$handle):
        echo "<b>File tidak dapat dibuka atau belum ada</b>";
    else:
        echo "<b>Isi File : </b><br>";
        while ($isi = fgets ($handle, 100)) {
            # code...
            echo $isi."<br>";
        }
    endif;
    fclose($handle);
?>