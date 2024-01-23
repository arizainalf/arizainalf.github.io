<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-purple">Edit Kegiatan</h4>
    </div>
    <div class="card-body">
      <?php foreach ($kegiatan as $item) { ?>
        <form class="user" method="POST" action="<?= base_url('admin/kegiatan/prosesedit') ?>"
          enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                <div class="col-sm-12 mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label">Judul Kegiatan</label>
                  <input type="text" class="form-control" value="<?= $item->kegiatan ?>" name="judul">
                  <input type="hidden" class="form-control" value="<?= $item->id ?>" name="id">
                </div>
                <div class="col-sm-12">
                  <label for="exampleFormControlTextarea1" class="form-label">Tempat</label>
                  <input type="text" class="form-control" value="<?= $item->tempat ?>" name="tempat">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-4">
                  <label for="exampleFormControlTextarea1" class="form-label">Tanggal</label>
                  <input type="date" class="form-control" value="<?= $item->tanggal ?>" name="tanggal">
                </div>
              </div>
              <div class="form-group mb-0">
                <label for="foto_lama" class="form-label">File Gambar</label>
              </div>
              <div class="form-group">
                <img src="<?= base_url('assets/img/kegiatan/') . $item->foto ?>" class="img-thumbnail" width="200px"
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
                  <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                  <textarea class="form-control" rows="10" name="deskripsi"><?= $item->deskripsi ?></textarea>
                </div>
              </div>
              <a href="<?= base_url('admin/kegiatan') ?>" class="btn btn-warning">
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