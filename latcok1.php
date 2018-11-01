<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <h1 style="text-align: center;">Pembuatan Cookie</h1>
    <form action="latcok2.php" method="post">
    <table class="table">
        <tr>
            <td scope="row">&nbsp;</td>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td scope="row">&nbsp;</td>
            <td>Nama Samaran</td>
            <td><input type="text" name="nama_samaran"></td>
        </tr>
        <tr>
            <td scope="row">&nbsp;</td>
            <td scope="row">&nbsp;</td>
            <td><input type="submit" class="btn btn-success" name="kirim" value="Kirim"></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['Hapus'])){
        setcookie('nama', '');
        setcookie('nama_samaran', '');
        
    }
?>


