<?php
    $counter_file = "counter.txt";
    if (!file_exists($counter_file)) {
        # code...
        fopen($counter_file, "w");
    }

    $file =fopen($counter_file, "r");
    $counter1 = fread($file, 10);
    fclose($file);

    $counter++;

    echo "<h2> Anda adalah pengunjung ke - $counter1</h2>";
    $file = fopen($counter_file, "w");
    fclose($file);
?>