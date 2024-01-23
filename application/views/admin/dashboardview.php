<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="row">
        <!-- Kegiatan Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-purple text-uppercase mb-1">
                    Kegiatan</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $kegiatan ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('admin/kegiatan/') ?>"><i class="fas fa-calendar-alt fa-2x text-purple"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Berita Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-purple text-uppercase mb-1">
                    Prestasi</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $prestasi ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('admin/prestasi/') ?>">
                    <i class="fas fa-trophy fa-2x text-purple"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Prestasi Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-purple text-uppercase mb-1">
                    Pengajar</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $pengajar ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('admin/pengajar/') ?>">
                    <i class="fas fa-chalkboard-teacher fa-2x text-purple"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pengajar Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-purple shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-purple text-uppercase mb-1">
                    User</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?= $user ?>

                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('admin/user/') ?>">
                    <i class="fas fa-users fa-2x text-purple"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- <div class="col-xl-6 col-md-6 mb-4">
      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-purple">Development Approach</h6>
            </div>
            <div class="card-body">
              <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                CSS bloat and poor page performance. Custom CSS classes are used to create
                custom components and custom utility classes.</p>
              <p class="mb-0">Before working with this theme, you should become familiar with the
                Bootstrap framework, especially the utility classes.</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </div>

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->