<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php foreach ($identitas as $id) { ?>
    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/identitas/<?= $id->favicon_sekolah ?>" rel="icon">

    <title>
      <?= $id->nama_sekolah ?>
    </title>
  <?php } ?>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">
  <style>
    .bg-gradient-green {
      background-color: #433254;
      background-image: linear-gradient(180deg, #433254 10%, #544365 100%);
      background-size: cover;
    }

    .text-purple {
      color: #433254 !important;
    }

    a.text-purple:hover,
    a.text-purple:focus {
      color: #544365 !important;
    }

    .border-left-purple {
      border-left: 0.25rem solid #544365 !important;
    }
  </style>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-green sidebar sidebar-dark accordion fixed" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="<?= base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon">
            <?php foreach ($identitas as $id) { ?>
          <img src="<?= base_url('assets/img/identitas/') ?><?= $id->logo_sekolah ?>
          " width="50px" class="shadow">
            <?php } ?>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="<?= base_url() ?>admin/kegiatan">
          <i class="fas fa-calendar-alt"></i>
          <span>Kegiatan</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="<?= base_url() ?>admin/prestasi">
          <i class="fas fa-trophy"></i>
          <span>Prestasi</span>
        </a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="<?= base_url() ?>admin/pengajar">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Pengajar</span>
        </a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>admin/identitas">
          <i class="fas fa-sliders-h"></i>
          <span>Identitas</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>admin/user">
          <i class="fas fa-users"></i>
          <span>User</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>admin/visi">
          <i class="fas fa-users"></i>
          <span>Visi Misi</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt "></i>
          <span>Keluar</span>
        </a>
      </li>
      <!-- Divider -->
      <!-- <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div> -->
    </ul>
    <!-- End of Sidebar -->