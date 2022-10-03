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
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe
        ;

        public function __construct($judul = "Judul", $penulis = "Penulis", 
        $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
            $this->judul = $judul ;
            $this->penulis = $penulis ;
            $this->penerbit = $penerbit ;
            $this->harga = $harga ;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        // method
        public function getLabel() {
            return "$this->penulis, $this->penerbit, " ;
        }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this-> getLabel()} (Rp . {$this -> harga})";
        if($this->tipe == "komik") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "game") {
            $str .= "- {$this->waktuMain} Jam.";
        }
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
