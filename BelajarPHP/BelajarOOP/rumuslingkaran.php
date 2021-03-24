<?php 
// Proses untuk ke Halaman Login
function login($name, $password) {
    if($name == "admin" && $password == "test01") {
        header("location:lingkaran.php");
    } else {
    echo "<script>
            alert('Sorry, your username or password is wrong!');
        </script>";
    }
}    

    class lingkaran {
        protected $luasLingkaran;
        protected $kelilingLingkaran;
        protected $r;

        public function __construct($jariJari) {
            $this->r = $jariJari;
        }
        public function setJariLingkaran($jari) {
            $this->r = $jari;
        }
        public function getKeliling() {
            $this->kelilingLingkaran = 3.14 * $this->r * $this->r;
            return $this->kelilingLingkaran;
        }
        public function getLuas() {
            $this->luasLingkaran = 3.14 * 2 * $this->r;;
            return $this->luasLingkaran;
        }
    }
?>