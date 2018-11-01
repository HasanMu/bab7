<?php

    class laptop {
        var $pemilik;
        var $merk;

        function hidupkan()
        {
            return "Hidupkan Laptop Merk $this->merk punya $this->pemilik <br>";
        }

        function matikan()
        {
            return "Matikan Laptop Merk $this->merk punya $this->pemilik <br>";
        }
        
        function restart()
        {
            $matikan = $this->matikan();
            $hidupkan = $this->hidupkan();
            $restart = $matikan." ".$hidupkan;
            return $restart;
        }

    }

    $laptopku = new laptop;
    $laptopku->pemilik = "Hasan Muhammad";
    $laptopku->merk = "Asus";

    echo $laptopku->hidupkan();
    echo $laptopku->matikan();
    echo $laptopku->restart();