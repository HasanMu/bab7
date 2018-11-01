<?php
class laptop {

    var $pemilik;

    function hidup()
    {
        return "Hidupkan Laptop";
    }
}

$laptop1 = new laptop;
$laptop2 = new laptop;
$laptop3 = new laptop;

$laptop1->pemilik = "Anto";
$laptop2->pemilik = "Andi";
$laptop3->pemilik = "Dina";

echo "Laptop Milik : $laptop1->pemilik <br>";
echo "Laptop Milik : $laptop2->pemilik <br>";
echo "Laptop Milik : $laptop3->pemilik <br>";