<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Ubah Data Fakultas
        </div>
            <form action="" method="post">
              <input type="hidden" name="id" value="<?php echo $fakultas['id'];?>">
            <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?php echo $fakultas['fakultas'];?>">
                <small class="form-text text-danger"><?php echo form_error('fakultas'); ?></small>
           </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $fakultas['jurusan'];?>">
                <small class="form-text text-danger"><?php echo form_error('jurusan'); ?></small>
           </div>
            <div class="form-group">
                <label for="kaprodi">Kaprodi</label>
                <input type="text" class="form-control" id="kaprodi" name="kaprodi" value="<?php echo $fakultas['kaprodi'];?>">
                <small class="form-text text-danger"><?php echo form_error('kaprodi'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-dosen">Jumlah Dosen</label>
                <input type="text" class="form-control" id="jumlah-dosen" name="jumlah-dosen" value="<?php echo $fakultas['jml_dosen'];?>">
                <small class="form-text text-danger"><?php echo form_error('jumlah-dosen'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-matkul">Jumlah Matkul</label>
                <input type="text" class="form-control" id="jumlah-matkul" name="jumlah-matkul" value="<?php echo $fakultas['jml_matkul'];?>">
                <small class="form-text text-danger"><?php echo form_error('jumlah-matkul'); ?></small>
           </div>
            <div class="form-group">
                <label for="jumlah-mahasiswa">Jumlah Mahasiswa</label>
                <input type="text" class="form-control" id="jumlah-mahasiswa" name="jumlah-mahasiswa" value="<?php echo $fakultas['jml_mahasiswa'];?>">
                <small class="form-text text-danger"><?php echo form_error('jumlah-mahasiswa'); ?></small>
           </div>
            <div class="form-group">
                <label for="gedung">Gedung</label>
                <input type="text" class="form-control" id="gedung" name="gedung" value="<?php echo $fakultas['gedung'];?>">
                <small class="form-text text-danger"><?php echo form_error('gedung'); ?></small>
           </div>
           <button type="submit" name="tambah" class="btn btn-primary">Ubah</button>
         </form>
        </div>
        </div>
    </div>
  </div>
</div>