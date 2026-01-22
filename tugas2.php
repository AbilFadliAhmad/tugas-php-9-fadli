<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Contoh penggunaan
$pp = new PersegiPanjang(10, 5);
echo "Luas Persegi Panjang: " . $pp->hitungLuas();
?>
