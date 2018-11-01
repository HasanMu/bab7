<?php
class laptop
{
    public $pemilik;

    public function hidup()
    {
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
  
// tampilkan method
echo $laptop_anto->hidup(); // "Hidupkan Laptop"
?>
