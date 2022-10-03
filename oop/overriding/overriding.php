    <!-- Property dan Method  -->
<?php 
    // Merepresentasikan Sebuah Toko yang Menjual Produk 
    // Jualan Produk
    // Komik 
    // Game

use produk as GlobalProduk;

    class produk {
        // property
        public $judul, 
        $penulis, 
        $penerbit, 
        $harga
        ;

        public function __construct($judul = "Judul", $penulis = "Penulis", 
        $penerbit = "Penerbit", $harga = 0) {
            $this->judul = $judul ;
            $this->penulis = $penulis ;
            $this->penerbit = $penerbit ;
            $this->harga = $harga ;
        }

        // method
        public function getLabel() {
            return "$this->penulis, $this->penerbit, " ;
        }

    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this-> getLabel()} (Rp . {$this -> harga})";
        return $str ;
    }
}
    

    class komik extends produk {
        public $jmlHalaman;

        public function __construct($judul = "judul",$penulis = "penulis",$penerbit  = "penerbit",$harga =0, $jmlHalaman=0) {
            parent::__construct($judul ,$penulis ,$penerbit,$harga );
            $this->jmlHalaman = $jmlHalaman;
        }
        public function getInfoLengkap() {
            $str = "Komik :". parent::getInfoLengkap() ." - {$this->jmlHalaman} Halaman.)";
            return $str; 
        }
    }

    class game extends produk {
        public $waktuMain;

        public function __construct($judul = "judul",$penulis = "penulis",$penerbit  = "penerbit",$harga =0, $waktuMain=0) {
            parent::__construct($judul,$penulis,$penerbit,$harga);
            $this->waktuMain = $waktuMain;
        }
        public function getInfoLengkap() {
            $str = "Komik :". parent::getInfoLengkap() ." - {$this->waktuMain} Jam.)";
            return $str; 
        }
    }

    class CetakInfoProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})" ;
            return $str ;
        }
    }


    $produk = new produk("One Piece", "Eichiro Oda", "Shonen Jump", 50000, 100, 0, "komik") ;

    $produkBaru = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "game") ;


    // Komik : One Piece | Eichiro Oda, Shonen Jump (Rp. 50000) - 100 Halaman.
    // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.

    echo $produk->getInfoLengkap();
    echo "<br>";
    echo $produkBaru->getInfoLengkap();
?>
