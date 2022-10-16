<div class="container mt-5">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success"><a href="<?= BASEURL; ?>/mahasiswa"><i class='bx bx-arrow-back'></i></a></div>
  <div class="card-body text-success">
    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
    <p class="card-text"><?= $data['mhs']['nrp']; ?></p>
    <p class="card-text"><?= $data['mhs']['email']; ?></p>
  </div>
  <div class="card-footer bg-transparent border-success text-success"><?= $data['mhs']['jurusan']; ?></div>
</div>
</div>