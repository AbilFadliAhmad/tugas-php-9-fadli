<?php
class Mobil {
    public $merk;

    function __construct($merk) {
        $this->merk = $merk;
    }

    function infoMobil() {
        return "Merk mobil: " . $this->merk;
    }
}

// Membuat 2 objek Mobil
$mobil1 = new Mobil("Toyota");
$mobil2 = new Mobil("Honda");

// Menampilkan informasi masing-masing mobil
echo $mobil1->infoMobil() . "<br>";
echo $mobil2->infoMobil();
?>
