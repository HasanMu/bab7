<?php

class lingkaran{
    public $jari2;

    public function luasLingkaran()
    {
        $luas = 3.14 * $this->jari2 + $this->jari2;
        return "Luas Lingkaran : ".$luas;
    }

    public function kelilingLingkaran()
    {
        $keliling = 2 * 3.14 * $this->jari2;
        return "Keliling Lingkaran : ".$keliling;
    }
}

$bulat = new lingkaran;

$bulat->jari2 = 2;

echo "Jari-jari : $bulat->jari2";
echo "<br>";
echo $bulat->luasLingkaran()."<br>";
echo $bulat->kelilingLingkaran()."<br>";
