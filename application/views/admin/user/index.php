<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h4 class="font-weight-bold text-purple">Daftar Administrator</h4>
      <a class="btn btn-success" href="<?= base_url('admin/user/tambah') ?>">Tambah</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($user as $item): ?>
              <tr>
                <td>
                  <?= $item->id ?>
                </td>
                <td>
                  <?= $item->nama ?>
                </td>
                <td>
                  <?= $item->username ?>
                </td>
                <td>
                  <?= $item->password ?>
                </td>
                <td>
                  <a title="Hapus Data" class="btn btn-danger p-2"
                    href="<?= base_url('admin/user/delete/') ?><?= $item->id ?>"><i class="fas fa-trash"></i></a>
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