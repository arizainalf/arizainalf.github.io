<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h4 class="font-weight-bold text-purple">Daftar Prestasi</h4>
      <a href="<?= base_url('admin/prestasi/tambah') ?>"><button type="button"
          class="btn btn-success">Tambah</button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Prestasi</th>
              <th>Tingkat</th>
              <th>Deskripsi</th>
              <th>Foto</th>
              <th>Dibuat</th>
              <th>Diedit</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($prestasi as $item): ?>
              <tr>
                <td>
                  <?= $item->id ?>
                </td>
                <td>
                  <?= $item->prestasi ?>
                </td>
                <td>
                  <?= $item->tingkat ?>
                </td>
                <td>
                  <?= $item->deskripsi ?>
                </td>
                <td>
                  <div class="text-center">
                    <img src="<?= base_url('assets/img/prestasi/') ?><?= $item->foto ?>" alt="<?= $item->foto ?>"
                      class="rounded" width="200px">
                  </div>
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
                    <a class="btn btn-warning" href="<?= base_url('admin/prestasi/edit/') ?><?= $item->id ?>"
                      title="Edit"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="<?= base_url('admin/prestasi/hapus/') ?><?= $item->id ?>"
                      title="Hapus"><i class="fas fa-trash"></i></a>
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