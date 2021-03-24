<?php
    class PesawatTerbang {
        public $warnaPesawat;

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
?>