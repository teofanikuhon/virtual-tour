<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- ==============================================
Konten (isi)
=============================================== -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Halaman Utama
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
      <div class="col-lg-8">
        <div class="nav-tabs-custom bg-gray">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
            <li><a href="#aditprofile" data-toggle="tab">Ubah Profile</a></li>
            <li><a href="#gantisandi" data-toggle="tab">Ubah Sandi</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="profile">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?= base_url() ?>assets/dist/img/avatar5.png" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                  <h3><small>Nama Lengkap :</small><br><?= $user[0]['user_nama'] ?></h3>
                  <h3><small>Username :</small><br><?= $user[0]['user_name'] ?></h3>
                  <?php
                  if($user[0]['user_status'] == 1){
                    echo "<h3><small>Status Pengguna :</small><br>Admin</h3>";
                  } else {
                    echo "<h3><small>Status Pengguna :</small><br><h3>User</h3>";
                  }
                  ?>
                  <h3><h3><small>No HP :</small><br><?= $user[0]['user_nohp'] ?></h3>
                  <h3><h3><small>Email :</small><br><?= $user[0]['user_email'] ?></h3>
                </div>
              </div>
            </div>

            <div class="tab-pane" id="aditprofile">
              <form class="form-horizontal" action="<?= base_url(); ?>admin/editProfil" method="post">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-9">
                    <input name="name" type="text" class="form-control" id="nama" value="<?= $user[0]['user_name'] ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                  <div class="col-sm-9">
                    <input name="nama" type="text" class="form-control" id="nama" value="<?= $user[0]['user_nama'] ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nohp" class="col-sm-3 control-label">No HP</label>
                  <div class="col-sm-9">
                    <input name="nohp" type="text" class="form-control" id="nohp" value="<?= $user[0]['user_nohp'] ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <input name="email" type="text" class="form-control" id="email" value="<?= $user[0]['user_email'] ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-block btn-primary">Simpan Perubahan</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="gantisandi">
              <form action="<?= base_url() ?>admin/gantisandi" method="post" class="form-horizontal">
                <div class="form-group">
                  <label for="sandilama" class="col-sm-3 control-label">Kata Sandi Lama</label>
                  <div class="col-sm-9">
                    <input name="sandilama" type="password" class="form-control" id="sandilama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="sandibaru" class="col-sm-3 control-label">Kata Sandi Baru</label>
                  <div class="col-sm-9">
                    <input name="sandibaru" type="password" class="form-control" id="sandibaru" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="ceksandibaru" class="col-sm-3 control-label">Cek Sandi Baru</label>
                  <div class="col-sm-9">
                    <input name="ceksandibaru" type="password" class="form-control" id="ceksandibaru" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-block btn-primary">Simpan Perubahan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?=$religi?></h3>

              <p>Data Gambar</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=base_url('wisata')?>" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?=$alam?></h3>

              <p>Data Gambar</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=base_url('wisata')?>" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-12 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?=$users?></h3>

              <p>Pengguna Aplikasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?=base_url('superadmin')?>" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>