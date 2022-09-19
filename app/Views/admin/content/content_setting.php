<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
    href="https://datatables.net">official DataTables documentation</a>.</p>
    <div class="row">
      <!-- start card -->
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 d-flex">

          <div class="card-body flex-fill">
            <h5 class="card-title">Jalur Pendaftaraan</h5>
            <div class="row no-gutters align-items-center">
              <!-- table -->

              <div class="table-responsive">
                <table class="table" id="table1">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Jalur</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="datatable1">

                  </tbody>
                </table>
              </div>
              <!-- table -->
            </div>
          </div>
          <button type="button" class="btn btn-primary tambah_data_jalur">Tambah data</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-warning shadow h-100 py-2 d-flex">
          <div class="card-body flex-fill">
            <h5 class="card-title">Fakultas dan Prodi</h5>
            <div class="row no-gutters align-items-center">
              <!-- table -->
              <div class="table-responsive">
                <table class="table" id="table2">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Fakultas</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="datatable2">
                  </tbody>
                </table>
              </div>
              <!-- table -->
            </div>
          </div>
          <button type="button" class="btn btn-primary tambah_data_fakultas">Tambah data</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2 d-flex">
          <div class="card-body flex-fill">
            <h5 class="card-title">Nama Biaya Per Prodi</h5>
            <div class="row no-gutters align-items-center">
              <!-- table -->
              <div class="table-responsive">
                <table class="table" id="table3">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Biaya</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="datatable3">
                  </tbody>
                </table>
              </div>
              <!-- table -->
            </div>
          </div>
          <button type="button" class="btn btn-primary tambah_data_biaya">Tambah data</button>
        </div>
      </div>

      <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2 d-flex">
          <div class="card-body flex-fill">
            <h5 class="card-title">Master File List</h5>
            <div class="row no-gutters align-items-center">
              <form method="post">
              </form>
              <!-- table -->
              <div class="table-responsive">
                <table class="table" id="table4">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama File</th>
                      <th scope="col">Options</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="datatable5">
                  </tbody>
                </table>
              </div>
              <!-- table -->
            </div>
          </div>
          <button type="button" class="btn btn-primary tambah_data_file_list">Tambah data</button>
        </div>
      </div>
      <!-- end card -->
    </div>
    <div class="row">
      <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-danger shadow h-100 py-2 d-flex">
          <div class="card-body flex-fill">
            <h5 class="card-title">File Pendaftaran</h5>
            <div class="row no-gutters align-items-center">
              <form method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Filter Jalur</label>
                  <select class="form-control form-select" aria-label="Default select example" id="select_jalur_view"></select>
                </div>
              </form>
              <!-- table -->
              <div class="table-responsive">
                <table class="table" id="table4">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama File</th>
                      <th scope="col">Jalur</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="datatable4">
                  </tbody>
                </table>
              </div>
              <!-- table -->
            </div>
          </div>
          <button type="button" class="btn btn-primary tambah_data_file">Tambah data</button>
        </div>
      </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Gelombang PMB</h6>

      </div>
      <div class="card-header py-3">
        <button type="button" class="btn btn-primary tambah_gelombang" data-toggle="modal">Tambah Gelombang PMB</button>
      </div>
      <div class="card-body">
        <div class="table-responsive" >
          <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th>No</th>
                <th>Gelombang</th>
                <th>Periode Awal</th>
                <th>Periode Akhir</th>
                <th>Ketentuan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="gelombang_list">
            </tbody>
            <tfoot>
              <tr class="text-center">
                <th>No</th>
                <th>Gelombang</th>
                <th>Periode Awal</th>
                <th>Periode Akhir</th>
                <th>Ketentuan</th>
                <th>Action</th>
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
<div class="modal fade" id="modal_view_prodi" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_j" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Manage Fakultas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode Fakultas</label>
            <input type="text" class="form-control" id="kode_fakultas_v" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="nama_fakultas_v" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prodi</label>
            <!-- <input type="text" class="form-control" id="nama_fakultas_v" disabled> -->
            <div class="table-responsive" >
              <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr  class="text-center">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Prodi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="data_prodi">
                </tbody>
                <tfoot>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Prodi</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_tambah_gelombang" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_j" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_j">Tambah Gelombang Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id = "form_tambah_gelombang">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Gelombang</label>
            <input type="text" class="form-control" id="nama_gelombang" required placeholder="Nama Gelombang contoh: Khusus/Gelombang 1/Gelombang 2">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mulai</label>
            <input type="date" class="form-control"  id="tanggal_awal">
            <span id="show_tgl_awal" style="color:green"> </span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Selesai</label>
            <input type="date" class="form-control"  id="tanggal_akhir">
            <span id="show_tgl_akhir" style="color:blue"> </span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi Gelombang</label>
            <textarea rows="50" id="keterangan_gelombang" name="keterangan_gelombang" class="form-control ckeditor keterangan_gelombang"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_gelombang">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_edit_gelombang" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_j" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Gelombang Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id = "form_edit_gelombang">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Gelombang</label>
            <input type="text" class="form-control" id="nama_gelombang_e" required placeholder="Nama Gelombang contoh: Khusus/Gelombang 1/Gelombang 2">
            <input type="text" class="form-control" id="id_gelombang_e" hidden>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mulai</label>
            <input type="date" class="form-control"  id="tanggal_awal_e">
            <span id="show_tgl_awal_e" style="color:green"> </span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Selesai</label>
            <input type="date" class="form-control"  id="tanggal_akhir_e">
            <span id="show_tgl_akhir_e" style="color:blue"> </span>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi Gelombang</label>
            <textarea rows="50" id="keterangan_gelombang_e" name="keterangan_gelombang_e" class="form-control ckeditor keterangan_gelombang_e"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_edit_gelombang">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_tambah_jalur" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_j" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_j">Tambah Jalur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_tambah_jalur">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jalur PMB</label>
            <input type="text" class="form-control" id="nama_jalur" required placeholder="nama jalur">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Keterangan</label>
            <textarea rows="50" id="keterangan_jalur" name="keterangan_jalur" class="form-control ckeditor keterangan_jalur"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_jalur">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_tambah_fakultas" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_f" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_f">Tambah Fakultas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_tambah_fakultas">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode Fakultas</label>
            <input type="text" class="form-control" id="kode_fakultas" required placeholder="Kode Fakultas">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="nama_fakultas" required placeholder="Nama Fakultas">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_fakultas">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_view_biaya" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_b" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Biaya PMB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID Biaya</label>
            <input type="text" class="form-control" id="id_v_biaya" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Biaya</label>
            <input type="text" class="form-control" id="nama_v_biaya" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi Biaya</label>
            <div id="keterangan_v_biaya"></div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_edit_biaya" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_b" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_b">Tambah Biaya PMB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_edit_biaya">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Biaya</label>
            <input type="text" class="form-control" id="id_e_biaya" hidden>
            <input type="text" class="form-control" id="nama_e_biaya" required placeholder="Nama Biaya">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi Biaya</label>
            <textarea rows="50" id="keterangan_e_biaya" name="keterangan_e_biaya" class="form-control ckeditor keterangan_e_biaya"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_save_edit_biaya">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_tambah_biaya" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_b" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_b">Tambah Biaya PMB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_tambah_biaya">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Biaya</label>
            <input type="text" class="form-control" id="nama_biaya" required placeholder="Nama Biaya">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi Biaya</label>
            <textarea rows="50" id="keterangan_biaya" name="keterangan_biaya" class="form-control ckeditor keterangan_biaya"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_biaya">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_tambah_file" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Tambah File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_tambah_file">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Pilih Jalur</label>
            <select class="form-control form-select" aria-label="Default select example" id="select_jalur"></select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Berkas</label>
            <input type="text" class="form-control" id="nama_file" required placeholder="Nama Berkas">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Aturan</label>
            <select class="form-control form-select" aria-label="Default select example" id="pilih_aturan">
              <!-- <option value="" disabled selected>Pilih Berkas</option> -->
              <option value="1" selected>Mandatory/Wajib</option>
              <option value="2">Optional</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="keterangan_file" name="keterangan_file" class="form-control"></textarea>
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
<div class="modal fade" id="modal_tambah_file_list" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Tambah Daftar File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_tambah_file_list">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Berkas</label>
            <input type="text" class="form-control" id="nama_file_list" required placeholder="Nama Berkas">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Aturan</label>
            <select class="form-control form-select" aria-label="Default select example" id="pilih_aturan_list">
              <!-- <option value="" disabled selected>Pilih Berkas</option> -->
              <option value="1" selected>Mandatory/Wajib</option>
              <option value="2">Optional</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="keterangan_file_list" name="keterangan_file_list" class="form-control"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_tambah_file_list">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_view_file" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">View File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID file</label>
            <input type="text" class="form-control" id="id_v" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Berkas</label>
            <input type="text" class="form-control" id="nama_file_v" placeholder="Nama Berkas" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jalur</label>
            <input type="text" class="form-control" id="nama_jalur_v" required placeholder="Nama Berkas" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="deskripsi_v" name="deskripsi_v" class="form-control" disabled></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <button type="button" class="btn btn-primary btn_edit_file">Simpan</button> -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_view_file_deskrips_list" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">View File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID file</label>
            <input type="text" class="form-control" id="id_v_l" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Berkas</label>
            <input type="text" class="form-control" id="nama_file_v_l" placeholder="Nama Berkas" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="deskripsi_v_l" name="deskripsi_v_l" class="form-control" disabled></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <!-- <button type="button" class="btn btn-primary btn_edit_file">Simpan</button> -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_edit_file" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Edit File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id= "form_modal_edit_file">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Berkas</label>
            <input type="text" class="form-control" id="id_file_e" hidden>
            <input type="text" class="form-control" id="nama_file_e" required placeholder="Nama Berkas">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Aturan</label>
            <select class="form-control form-select" aria-label="Default select example" id="pilih_aturan_e">
              <!-- <option value="" disabled selected>Pilih Berkas</option> -->
              <option value="1" selected>Mandatory/Wajib</option>
              <option value="2">Optional</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="keterangan_file_e" name="keterangan_file_e" class="form-control"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_edit_file">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_edit_jalur" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Edit Jalur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_modal_edit_jalur">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jalur</label>
            <input type="text" class="form-control form-select" aria-label="Default" id="edit_j_id" hidden="true"></input>
            <input type="text" class="form-control form-select" aria-label="Default" id="edit_j_nama_jalur"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Status</label>
            <select class="form-control form-select" aria-label="Default select example" id="edit_j_status">
              <!-- <option value="" disabled selected>Pilih Berkas</option> -->
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi</label>
            <textarea rows="5" id="edit_deskripsi_jalur" name="edit_deskripsi_jalur" class="form-control ckeditor edit_deskripsi_jalur"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary btn_edit_j_save">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_view_jalur" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">View Jalur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jalur:</label>
            <input type="text" class="form-control form-select" aria-label="Default" id="view_j_nama_jalur" disabled></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Status:</label>
            <select class="form-control form-select" aria-label="Default select example" id="view_j_status" disabled>
              <!-- <option value="" disabled selected>Pilih Berkas</option> -->
              <option value="1" disabled>Aktif</option>
              <option value="0" disabled>Tidak Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">File:</label>
            <div class="row">
              <div class="col-md-6">
            <table class="table responsive table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama File Tersedia</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody id="datafilebyjalurtersedia">
              </tbody>
            </table>
            </div>
            <div class="col-md-6">
          <table class="table responsive table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama File Dipilih</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="datafilebyjalurdipilih">
            </tbody>
          </table>
          </div>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Deskripsi:</label>
            <hr>
            <div id="view_deskripsi_jalur"></div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal gelombang -->
<div class="modal fade" id="jalur_gelombang" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_j" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_j">Tambah Jalur dan Prodi Pada Gelombang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">

            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <div class="table-responsive" >
                    <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr  class="text-center">
                          <th>No</th>
                          <th>Jalur Tersedia</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="data_jalur_gelombang_tersedia">
                      </tbody>
                      <tfoot>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Jalur Tersedia</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="table-responsive" >
                    <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr  class="text-center">
                          <th>No</th>
                          <th>Jalur Aktif Dipilih</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="data_jalur_gelombang_terpilih">
                      </tbody>
                      <tfoot>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Jalur Aktif Dipilih</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <div class="col-sm">
                        <div class="table-responsive" >
                          <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
                            <thead id= "head_prodi_by_jalur">
                            </thead>
                            <tbody id="data_prodi_by_jalur">
                            </tbody>
                            <tfoot id= "foot_prodi_by_jalur">
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <div class="col-sm">
                        <div class="table-responsive" >
                          <table id="dataTable" class="table table-bordered" cellspacing="0" width="100%">
                            <thead id= "head_biaya_by_prodi">
                            </thead>
                            <tbody id="data_biaya_by_prodi">
                            </tbody>
                            <tfoot id= "foot_biaya_by_prodi">
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?=base_url()?>/assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/content_setting.js"></script>
