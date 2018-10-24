




<html>
<head>

    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
if(isset($_POST["kirim"])){
    $name = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nope = $_POST['nope'];
    $dir_upload = "images/";
    $nama_file = $_FILES['file']['name'];
    //
    echo "<center>
        <table border='0' class='table'>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><h3><b> $name</b></h3></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><h3><b> $alamat</b></h3></td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>:</td>
                <td><h3><b> $nope</b></h3></td>
            </tr>";

    
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $cek = move_uploaded_file ($_FILES['file']['tmp_name'],
        $dir_upload.$nama_file);

            echo "<tr>
                    <td>Foto</td>
                    <td>&nbsp;</td>
                    <td><img src='$dir_upload/$nama_file'></td>
                </tr>
            </table>
        </center>";
    
    } else {
        die("Salahh");
    }
    
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
