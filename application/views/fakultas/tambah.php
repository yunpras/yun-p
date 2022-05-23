<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Tambah Data Faultas
        </div>
            <form action="" method="post">
            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas">
                <small class="form-text text-danger"><?php echo form_error('fakultas'); ?></small>
           </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
                <small class="form-text text-danger"><?php echo form_error('jurusan'); ?></small>
           </div>
            <div class="form-group">
                <label for="kaprodi">Kaprodi</label>
                <input type="text" class="form-control" id="kaprodi" name="kaprodi">
                <small class="form-text text-danger"><?php echo form_error('kaprodi'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-dosen">Jumlah Dosen</label>
                <input type="text" class="form-control" id="jumlah-dosen" name="jumlah-dosen">
                <small class="form-text text-danger"><?php echo form_error('jumlah-dosen'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-matkul">Jumlah Matkul</label>
                <input type="text" class="form-control" id="jumlah-matkul" name="jumlah-matkul">
                <small class="form-text text-danger"><?php echo form_error('jumlah-matkul'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-mahasiswa">Jumlah Mahasiswa</label>
                <input type="text" class="form-control" id="jumlah-mahasiswa" name="jumlah-mahasiswa">
                <small class="form-text text-danger"><?php echo form_error('jumlah-mahasiswa'); ?></small>
           </div>
            <div class="form-group">
                <label for="gedung">Gedung</label>
                <input type="text" class="form-control" id="gedung" name="gedung">
                <small class="form-text text-danger"><?php echo form_error('gedung'); ?></small>
           </div>
           <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
         </form>
        </div>
        </div>
    </div>
  </div>
</div>