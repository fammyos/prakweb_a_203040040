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
        $harga ;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
            $this->judul = $judul ;
            $this->penulis = $penulis ;
            $this->penerbit = $penerbit ;
            $this->harga = $harga ;
        }

        // method
        public function getLabel() {
            return "$this->penulis, $this->penerbit" ;
        }
    }


    $produk = new produk("One Piece", "Eichiro Oda", "Shonen Jump", 50000) ;

    $produkBaru = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000) ;

    $produkAsal = new produk("FIFA 2022");

    echo "Komik : " . $produk->getLabel() ;

    echo "<br>" ;

    echo "Game : " . $produkBaru->getLabel() ;

    echo "<br>" ;
    
    var_dump($produkAsal) ;
?>
