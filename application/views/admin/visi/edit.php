<div class="container-fluid">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">

      <div class="card shadow mb-3">

        <div class="card-header py-3">
          <h4 class="m-0 font-weight-bold text-purple">Edit Misi</h4>
        </div>
        <div class="card-body">

          <form action="<?= base_url() . 'admin/visi/editmisi' ?>" method="post" enctype="multipart/form-data"
            class="user">
            <div class="row">
              <div class="col-lg-12 mb-1">
                <div class="form-group row mb-1">
                  <?php foreach ($misi as $item) { ?>
                    <div class="col-sm-12 mb-4">
                      <label for="misi" class="form-label">Misi</label>
                      <textarea name="misi" id="misi" class="form-control"><?= $item->misi ?></textarea>
                      <input type="hidden" name="id" value="<?= $item->id ?>">
                    </div>
                  <?php } ?>
                </div>
                <div class="col-lg-12">
                  <a href="<?= base_url('admin/visi') ?>" class="btn btn-warning">Kembali</a>
                  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
          </form>
        </div>
      </div>

    </div>
    <div class="col-2"></div>
  </div>
  <!-- DataTales Example -->

</div>