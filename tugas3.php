<?php
class Buku {
    public $judul;
    public $pengarang;

    function __construct($judul, $pengarang) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    function infoBuku() {
        return "Judul: $this->judul, Pengarang: $this->pengarang";
    }
}

// Contoh penggunaan
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata");
echo $buku1->infoBuku();
?>
