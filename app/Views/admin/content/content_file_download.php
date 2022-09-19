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
        <h6 class="m-0 font-weight-bold text-primary">Data File</h6>

      </div>
      <div class="card-header py-3">
        <button type="button" class="btn btn-primary tambah_file" data-toggle="modal">Tambah File</button>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Filter Gelombang</label>
            <select class="form-control form-select" aria-label="Default select example" id="select_periode_view"></select>
          </div>
        </form>
        <div class="table-responsive" >
          <table id="tabel_serverside" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th>NO</th>
                <th>NAMA</th>
                <th>FILE</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th>NO</th>
                <th>NAMA</th>
                <th>FILE</th>
                <th>ACTION</th>
              </tr>
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
<div class="modal fade" id="modal_tambah_file" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Tambah File Per Gelombang Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="modal_tambah_file" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Gelombang PMB:</label>
            <select class="form-control form-select" aria-label="Default select example" id="select_gelombang"></select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama File:</label>
            <input type="text" class="form-control" id="nama_file" required placeholder="Nama File">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi File:</label>
            <textarea rows="50" id="deskripsi" name="deskripsi" class="form-control ckeditor deskripsi"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">File (Harus ada file):</label>
            <input type="file" class="form-control" id="file">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_file">Simpan</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?=base_url()?>/assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/content_file_download.js"></script>
