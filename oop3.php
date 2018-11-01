<?php
    class biodata
    {
        var $nama;
        var $alamat;
        var $kelas;

        function asalSekolah()
        {
            return "SMK Assalaam bandung";
        }
    }

    $profil = new biodata;
    $profil1 = new biodata;
    $profil2 = new biodata;

    $profil->nama = "Hasan Muhammad";
    $profil->alamat = "Bandung, Jawa Barat";
    $profil->kelas = "XI RPL 2";

    $profil1->nama = "Muhammad Sholeh";
    $profil1->alamat = "Bandung, Jawa Tengah";
    $profil1->kelas = "XI RPL 2";

    $profil2->nama = "Sholeh";
    $profil2->alamat = "Bandung, Jawa Timur";
    $profil2->kelas = "XI RPL 2";

    echo "Nama : $profil->nama <br>";
    echo "Alamat : $profil->alamat <br>";
    echo "Kelas : $profil->kelas <br>";
    echo "Asal Sekolah : ".$profil->asalSekolah() ."<br>";

    echo "<br>";
    echo "Nama : $profil1->nama <br>";
    echo "Alamat : $profil1->alamat <br>";
    echo "Kelas : $profil1->kelas <br>";
    echo "Asal Sekolah : ".$profil1->asalSekolah() ."<br>";

    echo "<br>";
    echo "Nama : $profil2->nama <br>";
    echo "Alamat : $profil2->alamat <br>";
    echo "Kelas : $profil2->kelas <br>";
    echo "Asal Sekolah : ".$profil2->asalSekolah() ."<br>";
    

?>