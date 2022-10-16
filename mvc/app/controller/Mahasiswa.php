<?php 
    class Mahasiswa extends Controller{
        public function index() {
            $data['judul'] = 'Daftar Mahasiswa' ;
            $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa() ;
            $this->view('template/header', $data) ;
            $this->view('mahasiswa/index', $data) ;
            $this->view('template/footer') ;
        }

        public function detail($id) {
            $data['judul'] = 'Detail Mahasiswa' ;
            $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id) ;
            $this->view('template/header', $data) ;
            $this->view('mahasiswa/detail', $data) ;
            $this->view('template/footer') ;
        }

        public function tambah() {
            if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
                Flasher::setFlash('Berhasil!', 'ditambahkan', 'success') ;
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
              } else { 
                Flasher::setFlash('Gagal!', 'ditambahkan', 'danger') ;
              header('Location: ' . BASEURL . '/mahasiswa');
              exit;
              }
        }
    }
?>