<?php
    // PUBLIC CLASS
    class PesawatTerbang {
        public $warnaPesawat;

        // Method atau function CONSTRUCT
        public function __construct($warnaAwal) {
            $this->warnaPesawat = $warnaAwal;
        }

        public function gantiWarna($warnaBaru) {
            $this->warnaPesawat = $warnaBaru;
            return $this-> warnaPesawat;
        }
        public function setWarna($warnaBaru) {
            $this->warnaPesawat = $warnaBaru;
        }
        public function getWarna() {
            return $this->warnaPesawat;
        }
    }

    // PROTECTED CLASS
    class Mobil {
        protected $warnaMobil;
        protected $kecepatanMobil;

        public function __construct($warnaAwalMobil) {
            $this->warnaMobil = $warnaAwalMobil;
            $this->kecepatanMobil = 0;
        }
        public function tambahKecepatan($kecepatan) {
            $this->kecepatanMobil = $kecepatan + $this->kecepatanMobil;
        }
        public function setWarna($warnaBaru) {
            $this->warnaMobil = $warnaBaru;
        }
        public function getWarna() {
            return $this->warnaMobil;
        }    
        public function getKecepatan() {
            return $this->kecepatanMobil;
        }
    }
?>
