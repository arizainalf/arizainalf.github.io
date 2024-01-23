<div class="container-fluid">


  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-purple">Identitas</h4>
    </div>
    <div class="card-body">
      <?php foreach ($identitas as $item) { ?>
        <form class="user" method="POST" action="<?= base_url('admin/identitas/prosesedit') ?>"
          enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group row">
                <div class="col-sm-12 mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label">Nama Sekolah</label>
                  <input type="text" class="form-control" value="<?= $item->nama_sekolah ?>" name="nama_sekolah">
                  <input type="hidden" value="<?= $item->id ?>" name="id">
                </div>
                <div class="col-sm-12 mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label">Nama Kepala Sekolah</label>
                  <input type="text" class="form-control" value="<?= $item->nama_kepsek ?>" name="nama_kepsek">
                </div>
                <div class="form-group mb-0">
                  <label for="foto_lama" class="form-label">Foto Kepala Sekolah</label>
                </div>
                <div class="form-group">
                  <img src="<?= base_url('') ?>assets/img/identitas/<?= $item->foto_kepsek ?>" class="img-thumbnail"
                    width="150px" id="foto_lama">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" value="<?= $item->foto_kepsek ?>" name="foto_kepsek_lama">
                  <input type="file" name="foto_kepsek">
                </div>
                <div class="col-sm-12">
                  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                  <input type="text" class="form-control" value="<?= $item->alamat_sekolah ?>" name="alamat">
                </div>
              </div>
              <div class="form-group mb-0">
                <label for="foto_lama" class="form-label">Logo Sekolah</label>
              </div>
              <div class="form-group">
                <img src="<?= base_url('assets/img/identitas/') . $item->logo_sekolah ?>" class="img-thumbnail"
                  width="200px" id="foto_lama">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $item->logo_sekolah ?>" name="logo_lama">
                <input type="file" name="logo">
              </div>
              <div class="form-group mb-0">
                <label for="foto_lama" class="form-label">Favicon Sekolah</label>
              </div>
              <div class="form-group">
                <img src="<?= base_url('assets/img/identitas/') . $item->favicon_sekolah ?>" class="img-thumbnail"
                  width="50px" id="foto_lama">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" value="<?= $item->favicon_sekolah ?>" name="favicon_lama">
                <input type="file" name="favicon">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Tentang Sekolah</label>
                  <textarea class="form-control" rows="10" name="tentang_sekolah"><?= $item->tentang_sekolah ?></textarea>
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Sambutan Kepala Sekolah</label>
                  <textarea class="form-control" rows="10" name="sambutan_kepsek"><?= $item->sambutan_kepsek ?></textarea>
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Telepon</label>
                  <input type="text" class="form-control" value="<?= $item->telepon ?>" name="telepon">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Email</label>
                  <input type="text" class="form-control" value="<?= $item->email ?>" name="email">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Facebook</label>
                  <input type="text" class="form-control" value="<?= $item->facebook ?>" name="facebook">
                </div>
                <div class="mb-3">
                  <label for="deskripsi" class="form-label">Instagram</label>
                  <input type="text" class="form-control" value="<?= $item->instagram ?>" name="instagram">
                </div>
              </div>
              <a href="<?= base_url('admin/identitas') ?>" class="btn btn-warning">
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