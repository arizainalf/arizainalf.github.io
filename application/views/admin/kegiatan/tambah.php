<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-3">

    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-purple">Tambah Kegiatan</h4>
    </div>
    <div class="card-body">

      <form action="<?= base_url() . 'admin/kegiatan/prosestambah' ?>" method="post" enctype="multipart/form-data"
        class="user">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group row mb-1">
              <div class="col-sm-12 mb-1">
                <label for="judul" class="form-label">Judul Kegiatan</label>
                <input type="text" class="form-control" name="judul" id="judul">
              </div>
              <div class="col-sm-12">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat">
              </div>
            </div>
            <div class="form-group row mb-1">
              <div class="col-4">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal">
              </div>
            </div>
            <div class="form-group row mb-1">
              <div class="col-3">
                <label for="foto" class="form-label">File Gambar</label>
                <input type="file" name="foto" id="foto">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-1">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kegiatan</label>
                <textarea class="form-control" rows="10" name="deskripsi"></textarea>
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>