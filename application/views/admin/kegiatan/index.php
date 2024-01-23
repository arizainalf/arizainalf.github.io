<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h4 class="font-weight-bold text-purple">Daftar Kegiatan</h4>
      <a href="<?= base_url('admin/kegiatan/tambah') ?>"><button type="button" class="btn btn-success"><i
            class="fas fa-plus"></i> Tambah</button></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kegiatan</th>
              <th>Deskripsi</th>
              <th>Tempat</th>
              <th>Tanggal</th>
              <th>foto</th>
              <th>Dibuat</th>
              <th>Diedit</th>
              <th>action</th>
            </tr>
          </thead>
          <!-- <tfoot>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Tempat</th>
            <th>Tanggal</th>
            <th>foto</th>
            </tr>
          </tfoot> -->
          <tbody>
            <?php foreach ($kegiatan as $item): ?>
              <tr>
                <td>
                  <?= $item->id ?>
                </td>
                <td>
                  <?= $item->kegiatan ?>
                </td>
                <td>
                  <?= $item->deskripsi ?>
                </td>
                <td>
                  <?= $item->tempat ?>
                </td>
                <td>
                  <?= $item->tanggal ?>
                </td>
                <td>
                  <div class="text-center">
                    <img src="<?= base_url('assets/img/kegiatan/') ?><?= $item->foto ?>" alt="<?= $item->foto ?>"
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
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a title="Edit Data" class="btn btn-warning p-2"
                      href="<?= base_url('admin/kegiatan/edit/') ?><?= $item->id ?>"><i class="fas fa-edit"></i></a>
                    <a title="Hapus Data" class="btn btn-danger p-2"
                      href="<?= base_url('admin/kegiatan/delete/') ?><?= $item->id ?>">
                      <i class="fas fa-trash"></i></a>
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