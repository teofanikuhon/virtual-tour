<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Jumbotron -->
<section class="">
  <div class="jumbotron jumbotron-fluid bgt"> 
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="<?= base_url('assets/video/tincep.mp4') ?>" type="video/mp4">
    </video>

    <div class="container text-light py-5">
      <h1 class="display-1 text">Selamat Datang!</h1>
      <p class="lead text">Di aplikasi virtual tour desa tincep Kabupaten Minahasa.</p>
      <hr class="my-4 text garis">
      <!-- <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6285244430426&text=Hay%20Kami%20dari%20Sorong%20Wisata.%0Aada%20yang%20bisa%20dibantu%3F%0A%0A(ini%20merupakan%20Akun%20WhatsApp%20Bisnis%20Sorong%20Wisata)." target="_blank" role="button"><i class="fa fa-whatsapp"></i> Chat Via WhatsApp</a>-->
    </div>
  </div>
</section>
<!-- Virtual Tour -->
<section class="py-5" id="virtualtour">
  <div class="container-fluid px-0 mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Virtual Tour Desa Tincep</h2>
        <hr class="text-dark text">
      </div>
    </div>

    <div class="row justify-content-center mb-5">
      <div class="col-12 px-5">
        <div style="width: 100%; height: 600px; border: 2px solid #ccc; border-radius: 10px; overflow: hidden;">
          <iframe src="<?= base_url('assets/tour/index.php') ?>" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- Foto-foto -->
<section class="py-5 foto" id="foto">
  <div class="container mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Foto-foto</h2>
        <hr class="text-dark text">
      </div>
    </div>
    <div class="row mb-5 justify-content-center">
      <?php foreach($gbr as $g) { ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img height="250px" src="<?= base_url('assets/tour/img/upload/'.$g['wst_gambar']) ?>" 
                 class="card-img-top" 
                 data-toggle="modal" 
                 data-target="#modal-lihat-<?= $g['wst_id']; ?>" 
                 style="cursor:pointer;">
          </div>  
        </div>

        <!-- Modal Popup Detail -->
<div class="modal fade" id="modal-lihat-<?= $g['wst_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $g['wst_nama']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <p><strong>Alamat:</strong><br><?= $g['wst_alamat']; ?></p>
            <p><strong>Kategori:</strong><br><?= $g['wst_kategori']; ?></p>
            <p><strong>Deskripsi:</strong><br><?= $g['wst_deskripsi']; ?></p>
          </div>
          <div class="col-md-6 text-center">
            <img src="<?= base_url('assets/tour/img/upload/'.$g['wst_gambar']) ?>" class="img-fluid mb-3" style="max-height:400px;">
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->


      <?php } ?>
    </div>
  </div>
</section>



<!-- Kontak -->
<section class="py-5 bg-light" id="kontak">
  <div class="container mt-3">
    <div class="row mt-5">
      <div class="col text-center">
        <h2 class="text">Kontak</h2>
        <hr class="text-dark text">
      </div>
    </div>

    <div class="row mb-5 justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-primary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title text">Hubungi Kami</h5>
            <p class="card-text">Hubungi kami melalui kontak dibawah ini, ini kontak resmi kami.</p>
          </div>
        </div>
        
        <ul class="list-group mb-4">
          <li class="list-group-item"><h3>Kontak / Lokasi</h3></li>
          <li class="list-group-item">0812-xxxx-xxxx</li>
          <li class="list-group-item">desatincepg@gmail.com</li>
          <li class="list-group-item">JL.Sonder - Tincep, Kec. Sonder, Kabupaten Minahasa, Sulawesi Utara</li>
          <li class="list-group-item">Sulawesi Utara, Indonesia</li>
        </ul>
      </div>
      
      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6741.538485571437!2d124.74222991732024!3d1.2752113815868868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287696b74c12423%3A0xc875bf190d90286!2sDESA%20TINCEP!5e1!3m2!1sid!2sid!4v1745852914430!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
