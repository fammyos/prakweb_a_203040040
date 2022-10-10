<?php 
    class Mahasiswa_model {
        // private $mhs = [
        //     [
        //         "nama" => "Fammy Oktariva S",
        //         "nrp" => "203040040",
        //         "email" => "fammyoktrva@gmail.com",
        //         "jurusan" => "Teknik Informatika",
        //     ], 
        //     [
        //         "nama" => "Natasya Aurelia",
        //         "nrp" => "203040041",
        //         "email" => "natasyaaurel@gmail.com",
        //         "jurusan" => "Teknik Pangan",
        //     ], 
        //     [
        //         "nama" => "Mariah Austrina Octaviani",
        //         "nrp" => "203040042",
        //         "email" => "mariahstr@gmail.com",
        //         "jurusan" => "Teknik Industri",
        //     ]
        // ] ;

        private $dbh ; // database handler
        private $stmt ;

        public function __construct() {
            // data source name
            $dsn = 'mysql:host=localhost;dbname=phpmvc' ;

            try {
                $this->dbh = new PDO($dsn, 'root', '') ;
            } catch(PDOException $e) {
                die($e->getMessage()) ;
            }
        }

        public function getAllMahasiswa() {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa') ;
            $this->stmt->execute() ;
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC) ;
        }
    }
?>