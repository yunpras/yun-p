<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        Detail Fakultas
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $fakultas['fakultas']; ?></h5>
        <h6 class="card-text"><?php echo $fakultas['jurusan']; ?></h6>
        <h6 class="card-text"><?php echo $fakultas['kaprodi']; ?></h6>
        <hr>
        <label for="dosen">Jumlah Dosen =  <?php echo $fakultas['jml_dosen']; ?></label> 
        <br>
        <label for="dosen">Jumlah MataKuliah =  <?php echo $fakultas['jml_matkul']; ?></label>
        <br>
        <label for="dosen">Jumlah Mahasiswa =  <?php echo $fakultas['jml_mahasiswa']; ?></label>
        <br>
        <label for="dosen">Lokasi =  <?php echo $fakultas['gedung']; ?></label>
        <br>
        <a href="<?php echo base_url(); ?>fakultas" class="btn btn-primary">Kembali</a>
      </div>
    </div>
    </div>
  </div>
</div>