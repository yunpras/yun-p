<div class="container">
  <?php if($this->session->flashdata('flash')) :?>
  <div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Fakultas<strong>Berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?php echo base_url(); ?>fakultas/tambah" class="btn btn-primary">Tambah Data Fakultas</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Daftar Fakultas</h3>
      <ul class="list-group">
        <?php foreach($fakultas as $fks) :?>
        <li class="list-group-item"><?php echo $fks['jurusan']; ?>
          <a href="<?php echo base_url();?>fakultas/hapus/<?php echo $fks['id'];?>" class="badge bg-danger float-end" onclick="return confirm('Yakin?');">Hapus</a>
          <a href="<?php echo base_url();?>fakultas/detail/<?php echo $fks['id'];?>" class="badge bg-primary float-end">Detail</a>
          <a href="<?php echo base_url();?>fakultas/ubah/<?php echo $fks['id'];?>" class="badge bg-success float-end">Ubah</a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>