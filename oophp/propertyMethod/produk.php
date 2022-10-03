    <!-- Property dan Method  -->
<?php 
    // Merepresentasikan Sebuah Toko yang Menjual Produk 
    // Jualan Produk
    // Komik 
    // Game

    class produk {
        // property
        public $judul = "Judul", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0 ;

        // method
        public function getLabel() {
            return "$this->penulis, $this->penerbit" ;
        }
    }

    // $komik = new produk() ;
    // $komik->judul = "One Piece" ;
    // var_dump($komik) ;

    // $game = new produk() ;
    // $game->judul = "Naruto" ;
    // $game->tambahProperty = "haha" ;
    // var_dump($game) ;

    $produk = new produk() ;
    $produk -> judul = "One Piece" ;
    $produk -> penulis = "Eichiro Oda" ;
    $produk -> penerbit = "Shonen Jump" ;
    $produk -> harga = 50000 ;
    
    // var_dump($produk) ;
    $produkBaru = new produk() ;
    $produkBaru -> judul = "Uncharted" ;
    $produkBaru -> penulis = "Neil Druckmann" ;
    $produkBaru -> penerbit = "Sony Computer" ;
    $produkBaru -> harga = 250000 ;

    echo "Komik : " . $produk->getLabel() ;

    echo "<br>" ;

    echo "Game : " . $produkBaru->getLabel() ;
?>
