<?php
if(isset($_POST['kirim'])){
    class laptopku
    {
        var $pemilik;
        var $merk;
        var $ukuran;

        function hidupkanLaptop()
        {
            $nilai = "Hidupkan Laptop";
        }

        function matikanLaptop()
        {
            return "Matikan Laptop";
        }
    }

    $laptopku = new laptopku;

    $laptopku->pemilik = $_POST['nama'];
    $laptopku->merk = $_POST['merk'];
    $laptopku->ukuran = $_POST['ukuran'];
    $laptopku->hidupkanLaptop()->nilai = $_POST['hidup_mati'];

    if(isset($_POST['hidup_mati'])){
        echo "<html>
                <head>
                    <meta charset='utf-8' />
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <title>OOP</title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
                </head>
                <body>";
        echo "<table class='table'>
                <tr>
                    <td>Nama Pemilik</td>
                    <td>:</td>
                    <td>$laptopku->pemilik</td>
                </tr>
                <tr>
                    <td>Merek Laptop</td>
                    <td>:</td>
                    <td>$laptopku->merk</td>
                </tr>
                <tr>
                    <td>Ukuran Layar</td>
                    <td>:</td>
                    <td>$laptopku->ukuran</td>
                </tr>
                <tr>
                    <td>Perintah</td>
                    <td>:</td>
                    <td>$laptopku->hidupkanLaptop</td>
                </tr>
            </table>
        ";
    }
} else {  
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table">
<form action="" method="post">
    <tr>
        <td>Nama Pemilik</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Merek Laptop</td>
        <td>:</td>
        <td><input type="text" name="merk"></td>
    </tr>
    <tr>
        <td>Ukuran Layar</td>
        <td>:</td>
        <td><input type="text" name="ukuran"></td>
    </tr>
    <tr>
        <td>Perintah</td>
        <td>:</td>
        <td>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="hidup_mati" id="option1" autocomplete="off" checked> Hidupkan Laptop
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="hidup_mati" id="option2" autocomplete="off"> Matikan Laptop
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="kirim"></td>
    </tr>
    </form>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

  <?php } ?>

