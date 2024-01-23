<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h4 class="font-weight-bold text-purple">Visi Misi</h4>
    </div>
    <div class="card-body">
      <?php foreach ($visi as $visi): ?>
        <form method="post" action="<?= base_url('admin/visi/editvisi/') ?>">
          <label for="visi" class="form-label">
            <h5>Visi</h5>
          </label>
          <input type="hidden" name="id" value="<?= $visi->id ?>">
          <div class="input-group mb-3">
            <input type="text" name="visi" class="form-control" id="visi" value="<?= $visi->visi ?>"
              aria-describedby="button-addon2">
            <button class="btn btn-success" id="button-addon2" type="submit">Update</button>
          </div>
        </form>
      <?php endforeach; ?>

      <label class="form-label">
        <h5>Misi</h5>
      </label> <a href="<?= base_url('admin/visi/tambah') ?>"><button type="button" class="btn btn-success"><i
            class="fas fa-plus"></i> Tambah</button></a>
      <div class="table-responsive ">
        <table class="table table-bordered align-middle" id="dataTable" width="100%" cellspacing="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Misi</th>
              <th>Dibuat</th>
              <th>Diedit</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($misi as $item): ?>
              <tr>
                <td>
                  <?= $no++ ?>
                </td>
                <td>
                  <?= $item->misi ?>
                </td>
                <td>
                  <?= $item->created_by ?>,
                  <?= $item->created_at ?>
                </td>
                <td>
                  <?= $item->update_by ?>,
                  <?= $item->update_at ?>
                </td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-warning" href="<?= base_url('admin/visi/edit/') ?><?= $item->id ?>" title="Edit"><i
                        class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="<?= base_url('admin/visi/hapus/') ?><?= $item->id ?>" title="Hapus"><i
                        class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->