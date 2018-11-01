<?php

    class mtk{
        public $jari2;
        // private $;

        public function __construct($a)
        {
            $this->jari2 = $a;
            echo " Selamat Datang! <br>";
            echo "==========================<br>";
        }

        public function LuasLingkaran()
        {
            $hasil = 3.14 * ($this->jari2 *$this->jari2);
            return $hasil;
        }

        public function KelilingLingkaran()
        {
            $hasil = 2 * (3.14 * $this->jari2);
            return $hasil;
        }

        public function __destruct()
        {
            echo "<br>==========================";
            echo "<br>Selamat Tinggal! ";
        }
    }

$b = new mtk(10);

echo "Jari-Jari : ".$b->jari2."<br>";
echo "Luas Lingkaran : ".$b->LuasLingkaran();
echo "<br>";
echo "Keliling Lingkaran : ".$b->KelilingLingkaran();