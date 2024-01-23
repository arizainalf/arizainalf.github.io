<?php
foreach ($identitas as $id) { ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <title>
      <?= $id->nama_sekolah ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php foreach ($identitas as $id) { ?>
      <!-- Favicons -->
      <link href="<?= base_url('assets/img/identitas/') ?><?= $id->favicon_sekolah ?>" rel="icon">
    <?php } ?>
    <link href="<?= base_url('assets/ebusiness/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
      rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="<?= base_url('assets/ebusiness/') ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('assets/ebusiness/') ?>lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="<?= base_url('assets/ebusiness/') ?>lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url('assets/ebusiness/') ?>lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="<?= base_url('assets/ebusiness/') ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/ebusiness/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/ebusiness/') ?>lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="<?= base_url('assets/ebusiness/') ?>css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('assets/ebusiness/') ?>css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="<?= base_url('assets/ebusiness/') ?>css/responsive.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    <style>
      .our-skill-area {
        position: relative;
      }

      .our-skill-area {
        background: rgba(0, 0, 0, 0) url("<?= base_url('assets/img/foto/') ?><?= $id->foto6 ?>") no-repeat fixed center top / cover;
      }


      .navbar-default {
        /* background: rgba(0, 0, 0, 0) none repeat scroll 0 0; */
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      }

      .main-menu ul.navbar-default .navbar-nav>.active>a,
      .navbar-default .navbar-nav>.active>a:hover,
      .navbar-default .navbar-nav>.active>a:focus {
        background: none;
        color: #333;
      }

      .navbar-default .navbar-toggle {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        border-radius: 0;
        padding: 25px 0px;
      }

      .portfolio-area {
        padding-top: 40px;
      }

      .navbar-default .navbar-nav>li>a:hover,
      .navbar-default .navbar-nav>li>a:focus {
        background-color: transparent;
        color: #fff;
      }

      .navbar-default .navbar-toggle:hover,
      .navbar-default .navbar-toggle:focus {
        background: none;
      }

      .navbar-default .navbar-toggle .icon-bar {
        background-color: #fff;
        width: 30px;
        height: 2px;
      }

      .text-white {
        color: #fff !important;
      }

      .testimonials-area {
        background: rgba(0, 0, 0, 0) url("<?= base_url('assets/img/foto/') ?><?= $id->foto4 ?>") no-repeat fixed center top / cover;
        height: auto;
        width: 100%;
      }

      .wellcome-area {
        background: rgba(0, 0, 0, 0) url("<?= base_url('assets/img/foto/') ?><?= $id->foto5 ?>");
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .blog-area {
        height: auto;
        width: 100%;
      }

      .navbar-header a.navbar-brand {
        display: inline-block;
        height: 70px;
        padding: auto;
      }

      .navbar-header a.navbar-brand,
      .stick .navbar-header a.navbar-brand {
        display: inline-block;
        height: 60px !important;
        padding: auto;
      }

      .main-menu ul.navbar-nav li a:hover {
        color: #cf9fff;
        /* background-color: #fff; */
      }

      .sticky-logo h4 {
        color: #fff;
        padding: 0;
        margin: 0;
        font-size: 27px;
        font-weight: bold;
        line-height: 1.5;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
      <!-- header-area start -->
      <div id="sticker" class="header-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">

              <!-- Navigation -->
              <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header text-center">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <!-- Brand -->
                  <a class="navbar-brand page-scroll sticky-logo" href="<?= base_url() ?>">
                    <h4><span></span>
                      <?= $id->nama_sekolah ?>
                    </h4>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <img src="img/logo.png" alt="" title=""> -->
                  </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#sambutan">Sambutan</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#visi">Visi</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#kegiatan">Kegiatan</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#prestasi">Prestasi</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#pengajar">Pengajar</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar-collapse -->
              </nav>
              <!-- END: Navigation -->
            </div>
          </div>
        </div>
      </div>
      <!-- header-area end -->
    </header>
    <!-- header end -->
  <?php } ?>