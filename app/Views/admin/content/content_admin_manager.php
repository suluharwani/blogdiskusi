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
        <h6 class="m-0 font-weight-bold text-primary">Data admin</h6>

      </div>
      <div class="card-header py-3">
        <button type="button" class="btn btn-primary tambah_admin" data-toggle="modal">Tambah admin</button>
      </div>
      <div class="card-body">
        <div class="table-responsive" >
          <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th>No</th>
                <th>ID/Nama/email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="admin_list">
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>No</th>
                <th>ID/Nama/email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="my-2"></div>
        <p class="mb-0 small">Note: Untuk melihat perubahan data bisa lihat di tombol change log </p>
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
<!-- modal changelog -->
<div class="modal fade" id="modal_changelog" tabindex="-1" role="dialog" aria-labelledby="modal_changelog_Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_changelog_Label">Changelog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div class="table-responsive" >
            <table id="myTable" class="table table-bordered" cellspacing="0" width="100%">
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
          <p class="mb-0 small">Note: Hanya menampilkan 10 data terakhir. Untuk melihat semua data, lihat di halaman changelog.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal detail dan update -->
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="modal_changelog_Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_changelog_Label">Detail Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Data</h1>
          </div>
          <form class="user" method="post">
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="det_nama_depan">Nama Depan</label>
                <input type="text" class="form-control form-control-user" id="det_nama_depan"
                name="nama_depan"  placeholder="First Name">
                <input type="text" id="det_id"
                name="nama_depan"  hidden>
              </div>
              <div class="col-sm-6">
                <label for="det_nama_belakang">Nama Belakang</label>
                <input type="text" class="form-control form-control-user" id="det_nama_belakang"
                name="nama_belakang"  placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="det_email">Email</label>
              <input type="email" class="form-control form-control-user" id="det_email"
              name="email" placeholder="Email Address">
            </div>
            <div class="form-group">
              <label for="det_status">Status</label>
              <input type="text" class="form-control form-control-user" id="det_status"
              name="status" disabled>
            </div>
            <div class="form-group">
              <label for="det_status">Diupdate</label>
              <input type="text" class="form-control form-control-user" id="det_update_at"
              name="updated_at" disabled>
            </div>
            <div class="form-group">
              <label for="det_level">Level</label>
              <div class="form-check">
                <input class="form-check-input det_level" type="radio" name="det_level" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">
                  Super Admin
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input det_level" type="radio" name="det_level" id="exampleRadios2" value="2">
                <label class="form-check-label" for="exampleRadios2">
                  Admin
                </label>
              </div>

            </div>
            <!-- <button type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
            Register
          </button>
          <hr>
          <a href="index.html" class="btn btn-google btn-user btn-block">
          <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="index.html" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
      </a> -->
    </form>
    <div class="my-2"></div>
    <p class="mb-0 small">Note: Untuk mengubah data klik tombol simpan.</p>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary simpan_detail" >Simpan</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>
</div>
</div>
</div>

<!-- end modal -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/content_admin_manager.js"></script>
