<?php 
    $file = "data.txt";

    if (is_file($file)) {
        # code...
        echo "File $file adalah FILE";
        if (is_executable($file)) {
            # code...
            echo "File $file bisa dijalankan secara langsung (executable)<br>";
        }
         else {
             echo "File $file tidak exeutable";
         }
    } 
?>