<?php

class laptop
{
    var $pemilik = "Hasan";

    function hidupkan()
    {
        return "Hidupkan Laptop $this->pemilik Sekarang!";
    }
}

$laptopku = new laptop;
$laptopku1 = new laptop;

echo $laptopku->hidupkan();
echo "<br>";

$laptopku->pemilik = "Muhammad";
echo "<br>";

echo $laptopku->hidupkan();
echo "<br>";

echo $laptopku1->hidupkan();
echo "<br>";