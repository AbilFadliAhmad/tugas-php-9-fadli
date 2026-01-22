<?php 
    class Mahasiswa {
        public $nama;

        function __construct($nama) {
            $this->nama = $nama;
        }
        public function tampilkanNama() {
            return $this->nama;
        }

        }
        
        $mhs = new Mahasiswa('Fadli');
        echo $mhs->tampilkanNama()
?>