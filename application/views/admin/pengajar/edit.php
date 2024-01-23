<div class="container-fluid">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">

      <div class="card shadow mb-3">

        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-purple">Tambah Pengajar</h4>
        </div>
        <div class="card-body">

          <form action="<?= base_url() . 'admin/pengajar/prosesedit' ?>" method="post" enctype="multipart/form-data"
            class="user">
            <?php foreach ($pengajar as $item) { ?>
              <div class="row">
                <div class="col-lg-6 mb-1">
                  <div class="form-group row mb-1">
                    <div class="col-sm-12 mb-1">
                      <label for="nama" class="form-label">Nama Pengajar</label>
                      <input type="text" class="form-control" name="nama" id="nama" value="<?= $item->nama ?>">
                      <input type="hidden" class="form-control" value="<?= $item->id ?>" name="id">
                    </div>
                    <div class="col-sm-12">
                      <label for="kontak" class="form-label">Kontak</label>
                      <input type="text" class="form-control" name="kontak" id="kontak" value="<?= $item->kontak ?>">
                    </div>
                    <div class="col-sm-12">
                      <label for="jabatan" class="form-label">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $item->jabatan ?>">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-1">
                  <div class="form-group row mb-3">
                    <div class="col-12">
                      <label for="foto" class="form-label">File Gambar</label>
                      <img src="<?= base_url('assets/img/pengajar/') . $item->foto ?>" class="img-thumbnail" width="140px"
                        id="foto_lama">
                      <input type="hidden" class="form-control" value="<?= $item->foto ?>" name="foto_existing">
                      <input type="file" name="foto" id="foto">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <a href="<?= base_url('admin/pengajar') ?>" class="btn btn-warning">Kembali</a>
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