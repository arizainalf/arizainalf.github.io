<div class="container-fluid">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">

      <div class="card shadow mb-3">

        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-purple">Profile User</h4>
        </div>
        <div class="card-body">

          <form action="<?= base_url() . 'admin/profile/prosesedit' ?>" method="post" enctype="multipart/form-data"
            class="user">
            <?php foreach ($user as $item) { ?>
              <div class="row">
                <div class="col-lg-6 mb-1">
                  <div class="form-group row mb-1">
                    <div class="col-sm-12 mb-1">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="<?= $item->nama ?>">
                      <input type="hidden" class="form-control" value="<?= $item->id ?>" name="id">
                    </div>
                    <div class="col-sm-12">
                      <label for="kontak" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="kontak" value="<?= $item->username ?>">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <a href="<?= base_url('admin/profile/edit') ?>" class="btn btn-warning">Ubah Password</a>
                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            <?php } ?>
          </form>
        </div>
      </div>

    </div>
    <div class="col-2"></div>
  </div>
  <!-- DataTales Example -->

</div>