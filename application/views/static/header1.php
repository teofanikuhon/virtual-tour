<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-reboot.min.css.map">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/asset/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
      nav a b{
        font-family: "georgia", "garamond", Palatino, serif;
      } 
      .jumbotron p, h1{
        font-size: 25px;
        font-family: "georgia", "garamond", Palatino, serif;
      }
      .b{
        background-image: url(assets/img/b.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .bgt{
        background-color: rgba(0,0,0,0.6);
      }
      .garis{
        border-bottom: .1rem solid silver;
      }
      .text{
        text-shadow: 5px 4px .3rem grey;
      }
    </style>

    <title>Virtual Tour Desa Tincep</title>
  </head>
  <body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>home"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>home#foto">Foto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>home#kontak">Kontak</a>
            </li>
          </ul>
          <?php if(!$this->session->has_userdata('user')){ ?>
            <a href="<?= base_url() ?>autentikasi" class="btn btn-outline-light ml-sm-0 ml-lg-5" type="submit"><i class="fa fa-sign-in fa-lg"></i> Login</a>
          <?php } else { ?>
            <a href="<?= base_url() ?>admin" class="btn btn-outline-light ml-sm-0 ml-lg-5" type="submit">Admin <i class="fa fa-arrow-right"></i></a>
          <?php } ?>
        </div>
      </div>
    </nav>