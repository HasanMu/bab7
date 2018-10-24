<!DOCTYPE html>
<html>
<head>
    <title>file09</title>
</head>
<body>
    <?php
        $dir = "include";
        $cek = mkdir ($cek);
        if($cek):
            echo "Direktori <b>$dir</b> berhasil dibuat";
        else:
            echo "Direktori <b>$dir</b> gagal dibuat";
        endif;

        $del = rmdir ($dir);
        if($del):
            echo "Direktori <b>$dir</b> berhasil dihapus";
        else:
            echo "Direktori <b>$dir</b> gagal dihapus";
        endif;
    ?>
</body>
</html>