<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-3">

    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-purple">Tambah Prestasi</h4>
    </div>
    <div class="card-body">

      <form action="<?= base_url() . 'admin/prestasi/prosestambah' ?>" method="post" enctype="multipart/form-data"
        class="user">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group row mb-1">
              <div class="col-sm-12 mb-1">
                <label for="prestasi" class="form-label">Prestasi</label>
                <input type="text" class="form-control" name="prestasi" id="prestasi">
              </div>
              <div class="col-sm-12">
                <label for="tingkat" class="form-label">Tingkat</label>
                <input type="text" class="form-control" name="tingkat" id="tingkat">
              </div>
            </div>
            <div class="form-group row mb-1">
              <div class="col-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group mb-1">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
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