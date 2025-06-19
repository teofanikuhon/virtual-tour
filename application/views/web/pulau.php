<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Jumbotron -->
<section class="mt-5">
  <div class="jumbotron jumbotron-fluid"> 
    <img src="<?= base_url() ?>assets/img/p1.jpeg" alt="...">

    <div class="container text-dark py-51">
      <h1 class="display-3 text">Wisata Pulau</h1>
      <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6285244430426&text=Hay%20Kami%20dari%20Sorong%20Wisata.%0Aada%20yang%20bisa%20dibantu%3F%0A%0A(ini%20merupakan%20Akun%20WhatsApp%20Bisnis%20Sorong%20Wisata)." target="_blank" role="button"><i class="fa fa-whatsapp"></i> Chat Via WhatsApp</a>
    </div>
  </div>
</section>


<!-- Profil -->
<section>
  <div class="container">
    <div class="row mb-4 justify-content-center">
      <div class="col-md-10">
        <form method="post" action="<?= base_url('home/pulau') ?>">
          <div class="input-group mb-31">
            <input type="text" class="form-control" name="cari" placeholder="Masukan nama tempat...">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr class="text-dark">
    <div class="row">
      <div class="col-lg-12">
        <!-- Pesan Singkat -->
        <?= $this->session->flashdata('pesan')?>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($c as $g) { ?>
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card">
            <img src="<?= base_url('assets/img/upload/'.$g['wst_gambar']) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $g['wst_nama'] ?></h5>
              <p class="card-text"><?= $g['wst_deskripsi'] ?></p>
              <p class="card-text"><?= $g['wst_alamat'] ?></p>  
              <a href="<?= $g['wst_maps'] ?>" class="btn btn-block btn-outline-primary" target="_blank">Lihat di Google Maps</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>