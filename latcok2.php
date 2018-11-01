<?php
    if (isset($_POST['kirim'])) {
           
        $nama = $_POST['nama'];
        $nama_samaran = $_POST['nama_samaran'];

        setcookie('nama', $nama,time()+ 3000);
        setcookie('nama_samaran', $nama_samaran,time()+ 3000);
        $cetak_cookie_nama = $_COOKIE['nama'];
        $cetak_cookie_nama_samaran = $_COOKIE['nama_samaran'];
        if (isset($cetak_cookie_nama)) {
            if (isset($cetak_cookie_nama_samaran)) {
            
        echo "<html>
                <head>
                    <title>Page Title</title>
                    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
                </head>
                <body>
                    <div class='container-fluid'>
                    <h1 style='text-align: center;'>Pencetakan Cookie</h1>

                    <form 
                        action='latcok1.php' 
                        method='post'>
                    <table class='table'>
                        <tr>
                            <td 
                                scope='row'>
                                &nbsp;
                            </td>
                            <td>Nama</td>
                            <td>$cetak_cookie_nama</td>
                        </tr>
                        <tr>
                            <td 
                                scope='row'>
                                &nbsp;
                                </td>
                            <td>Nama Samaran</td>
                            <td>$cetak_cookie_nama_samaran</td>
                        </tr>
                        <tr>
                            <td 
                                scope='row'>
                                &nbsp;
                            </td>
                            <td 
                                scope='row'>
                                &nbsp;
                            </td>
                            <td><input 
                                    type='submit' 
                                    class='btn btn-danger' 
                                    name='Hapus' 
                                    value='Hapus cookie'>
                            </td>
                        </tr>
                        
                    </table>
                    </form>
                    </div>
                </body>
                </html>";
                echo "a";
            }
        }
    }
?>

