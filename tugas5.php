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

// Contoh penggunaan
$mobil = new Mobil("Toyota");
echo $mobil->infoMobil();
?>
