<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-purple">Edit Prestasi</h4>
    </div>
    <div class="card-body">
      <?php foreach ($prestasi as $item) { ?>
        <form class="user" method="POST" action="<?= base_url('admin/prestasi/prosesedit') ?>"
          enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                <div class="col-sm-12 mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label">Prestasi</label>
                  <input type="text" class="form-control" value="<?= $item->prestasi ?>" name="prestasi">
                  <input type="hidden" class="form-control" value="<?= $item->id ?>" name="id">
                </div>
                <div class="col-sm-12">
                  <label for="exampleFormControlTextarea1" class="form-label">Tingkat</label>
                  <input type="text" class="form-control" value="<?= $item->tingkat ?>" name="tingkat">
                </div>
              </div>
              <div class="form-group mb-0">
                <label for="foto_lama" class="form-label">Foto</label>
              </div>
              <div class="form-group">
                <img src="<?= base_url('assets/img/prestasi/') . $item->foto ?>" class="img-thumbnail" width="200px"
                  id="foto_lama">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $item->foto ?>" name="foto_existing">
                <input type="file" name="foto">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi Prestasi</label>
                  <textarea class="form-control" rows="10" name="deskripsi"><?= $item->deskripsi ?></textarea>
                </div>
              </div>
              <a href="<?= base_url('admin/prestasi') ?>" class="btn btn-warning">
                Kembali
              </a>
              <button type="submit" name="submit" class="btn btn-primary">Update</button>

            </div>

          </div>
      </div>
      </form>
    <?php } ?>
  </div>
</div>
</div>