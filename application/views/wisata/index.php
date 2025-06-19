<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ==============================================
Konten (isi)
=============================================== -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Halaman Data Tempat
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <!-- Pesan Singkat -->
        <?= $this->session->flashdata('pesan')?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box  box-primary">
          <div class="box-header with-border1 bg-gray">
            <h3 class="box-title">Tabel Data Tempat</h3>
            <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-tambah">Tambah Data Baru</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Tempat</th>
                <th>Foto</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Opsi</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($wisata as $wst){ ?>
              <tr>
                <td><?= $wst['wst_nama']; ?></td>
                <td><img class="attachment-img" src="<?= base_url('assets/tour/img/upload/'.$wst['wst_gambar']); ?>" height="100px" width="200px"></td>
                <td><?= $wst['wst_alamat']; ?></td>
                <td><?= $wst['wst_kategori']; ?></td>
                <td>
                  <a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal-lihat-<?= $wst['wst_id']; ?>"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modal-edit-<?= $wst['wst_id']; ?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="<?= base_url('wisata/hapus/'.$wst['wst_id']); ?>"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Tambah Data Tempat</h4>
      </div>
      <div class="modal-body">
        <!-- form start -->
        <form action="<?= base_url('wisata/tambah') ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="nama">Nama Tempat</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Tempat ..." required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Tempat ..." required>
            </div>
            <div class="form-group">
              <label for="link">Link Maps</label>
              <input type="text" name="maps" class="form-control" id="link" placeholder="Link Maps Tempat ..." required>
            </div>
            <div class="form-group">
              <label>Kategori Tempat</label>
              <select class="form-control" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="Religi">Religi</option>
                <option value="Alam">Alam</option>
              </select>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukan Deskripsi ..." required></textarea>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar Tempat</label>
              <input type="file" name="gambar" id="gambar" required>
              <p class="help-block"><small class="text-danger">maksimal file 2MG dengan ekstensi .gif / .jpg / .png</small> .</p>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.modal tambah data -->



<!-- Modal Edit Data -->
<?php foreach ($wisata as $wst) { ?>
<div class="modal fade" id="modal-edit-<?= $wst['wst_id'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit Data Tempat</h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('wisata/edit/'.$wst['wst_id']) ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="nama">Nama Tempat</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $wst['wst_nama'] ?>" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $wst['wst_alamat'] ?>" required>
            </div>
            <div class="form-group">
              <label for="link">Link Maps</label>
              <input type="text" class="form-control" name="maps" id="link" value="<?= $wst['wst_maps'] ?>" required>
            </div>
            <div class="form-group">
              <label>Kategori Tempat</label>
              <select name="kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <option value="Religi">Religi</option>
                <option value="Alam">Alam</option>
              </select>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" rows="3" name="deskripsi" required><?= $wst['wst_deskripsi'] ?></textarea>
            </div>
            <div class="row">
              <div class="col-xs-4">
                <img class="" src="<?=base_url('assets/tour/img/upload/'.$wst['wst_gambar'])?>" width="100%" height="">
              </div>
              <div class="col-xs-8">
                <p class="help-block"><small class="text-danger">Kosongkan bagian ini jika tidak menggati file.</small></p>
                <div class="form-group">
                  <label for="gamabr">Pilih Gambar Baru</label>
                  <input type="file" name="gambar" id="gambr">
                  <p class="help-block"><small class="text-danger">maksimal file 2MG dengan ekstensi .gif / .jpg / .png</small></p>
                </div>
              </div>
            </div><br>
            <button type="submit" class="btn btn-block btn-primary">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- /.modal edit data -->



<!-- Modal Lihat Data -->
<?php foreach ($wisata as $wst) { ?>
<div class="modal fade" id="modal-lihat-<?= $wst['wst_id']; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-gray">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Lihat Detail Data Wisata</h4>
      </div>
      <div class="modal-body">
        <img src="<?= base_url('assets/tour/img/upload/'.$wst['wst_gambar']); ?>" width="100%">
        <h2><u><?= $wst['wst_nama']; ?></u></h2>
        <p><?= $wst['wst_deskripsi']; ?></p>
        <h3>Alamat : <?= $wst['wst_alamat']; ?></h3>
        <h3>Kategori : <?= $wst['wst_kategori']; ?></h3>
        <a class="btn btn-primary" target="_blank" href="<?= $wst['wst_maps'] ?>">Lihat Alamat di Google Maps</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- /.modal lihat data -->