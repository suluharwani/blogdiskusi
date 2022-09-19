<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
    href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Changelog</h6>

      </div>
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <div class="table-responsive" >
          <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>ip</th>
                <th>Riwayat</th>
                <th>Waktu</th>
              </tr>
            </thead>
            <tbody id="changelog_list">
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>ip</th>
                <th>Riwayat</th>
                <th>Waktu</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="my-2"></div>
        <p class="mb-0 small">Note: Data menunjukkan change log 1000 data terakhir</p>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- modal -->
<div class="modal fade" id="modal_tambah_admin" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Admin Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Depan:</label>
            <input type="text" class="form-control" id="nama_depan" required placeholder="nama depan">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Belakang:</label>
            <input type="text" class="form-control" id="nama_belakang" required placeholder="nama belakang">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" required placeholder="email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="password" required placeholder="min 4 karakter">
            <input type="checkbox"  class="check-input" id="lihat" onclick="showpwd()">
            <label class="form-check-label" for="lihat">Lihat Password</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_admin">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?=base_url()?>/assets/js/content_changelog.js"></script>
