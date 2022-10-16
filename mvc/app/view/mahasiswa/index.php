<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
          <?php Flasher::flash() ?>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Mahasiswa
        </button>
        <br><br>
            <h3 class ="mb-4">Daftar Mahasiswa</h3>

                    <ul class="list-group">

                        <?php foreach( $data['mhs'] as $mhs ) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-dark mr-2">Detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger mr-2" onclick="return confirm ('yakin?');">Hapus</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp">            
              </div>  

            <div class="form-group mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp" aria-describedby="nrpHelp">
            </div> 

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div> 

            <div class="form-group mb-3">  
                <label for="jurusan" class="form-label">Jurusan</label>          
            <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
                <option selected>Pilih Program Studi</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Perencanaan Wilayah dan Kota">Teknik Perencanaan Wilayah dan Kota</option>
            </select>
            </div>

            <div id="namaHelp" class="form-text">*Isi data dengan ketentuan yang berlaku.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div> 