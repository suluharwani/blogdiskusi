
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
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
        <h6 class="m-0 font-weight-bold text-primary">Data Slider</h6>

      </div>
      <div class="card-header py-3">
        <button type="button" class="btn btn-primary tambah_carousel" data-toggle="modal">Tambah Gambar Slider</button>
        <button type="button" class="btn btn-warning float-right view_content" data-toggle="modal">View Halaman</button>

      </div>
      <div class="card-body">
        <div class="table-responsive" >
          <table id="tabel_serverside2" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th style="width: 5%; text-align: center;">NO</th>
                <th style="width: 75%;">TITLE</th>
                <th style="width: 20%; text-align: center;">ACTION</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th style="width: 5%; text-align: center;">NO</th>
                <th style="width: 75%;">TITLE</th>
                <th style="width: 20%; text-align: center;">ACTION</th>
              </tr>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="my-2"></div>
      <p class="mb-0 small">Note: Untuk melihat perubahan data bisa lihat di tombol change log </p>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Content</h6>
    </div>
    <div class="card-header py-3">
      <button type="button" class="btn btn-primary tambah_content" data-toggle="modal">Tambah Content</button>
      <button type="button" class="btn btn-warning float-right view_content" data-toggle="modal">View Halaman</button>
    </div>
    <div class="card-body">
      <div class="table-responsive" >
        <table id="tabel_serverside" class="table table-bordered display" cellspacing="0" width="100%">
          <thead>
            <tr  class="text-center">
              <th style="width: 5%; text-align: center;">NO</th>
              <th style="width: 75%;">TITLE</th>
              <th style="width: 20%; text-align: center;">ACTION</th>
            </tr>
          </thead>
          <tfoot>
            <tr class="text-center">
              <th style="width: 5%; text-align: center;">NO</th>
              <th style="width: 75%;">TITLE</th>
              <th style="width: 20%; text-align: center;">ACTION</th>
            </tr>
          </tr>
        </tfoot>
      </table>
    </div>
    <div class="my-2"></div>
    <p class="mb-0 small">Note:  </p>
  </div>
</div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Downloadable Data Footer</h6>

  </div>
  <div class="card-header py-3">
    <button type="button" class="btn btn-primary tambah_file" data-toggle="modal">Tambah File</button>
    <button type="button" class="btn btn-warning float-right view_content" data-toggle="modal">View Halaman</button>
  </div>
  <div class="card-body">
    <div class="table-responsive" >
      <table id="tabel_serverside3" class="table table-bordered display" cellspacing="0" width="100%">
        <thead>
          <tr  class="text-center">
            <th style="width: 5%; text-align: center;">NO</th>
            <th style="width: 75%;">TITLE</th>
            <th style="width: 20%; text-align: center;">ACTION</th>
          </tr>
        </thead>
        <tfoot>
          <tr class="text-center">
            <th style="width: 5%; text-align: center;">NO</th>
            <th style="width: 75%;">TITLE</th>
            <th style="width: 20%; text-align: center;">ACTION</th>
          </tr>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="my-2"></div>
  <p class="mb-0 small">Note:  </p>
</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- modal -->
<div class="modal fade" id="modal_file_add" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_slider" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama File</label>
            <input type="text" class="form-control" id="file_title" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">File</label>
            <input type="file" class="form-control" id="downloadable_file" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="mr-auto">Note: File bebas, nama singkat jelas</div><br>
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_file"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_homepage" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 700px;">
        <iframe src="<?=base_url()?>" id = "frame_homepage"   style=" height: 100%; width: 100%;  "></iframe>
      </div>
      <div class="modal-footer">
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary"  id = "reload_frame" name="button">Reload page</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_slider_add" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_slider" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Main Title</label>
            <input type="text" class="form-control" id="slider_title" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title</label>
            <input type="text" class="form-control" id="slider_sub_title" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image Background (rekomendasi ukuran 1140x900 px)</label>
            <input type="file" class="form-control" id="slider_image" >
            <div id="preview" ></div>
          </div>
          <div class="form-group">
            <label for="text" class="col-form-label">Text</label>
            <textarea name="text" id="text_slider" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="mr-auto">Note: Kosongi text untuk menampilkan hanya image</div><br>
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_slider"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_content_add" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_slider" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Main Title</label>
            <input type="text" class="form-control" id="content_title" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title</label>
            <input type="text" class="form-control" id="content_sub_title" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image Background (rekomendasi ukuran 1140x900 px)</label>
            <input type="file" class="form-control" id="content_image" >
            <div id="preview_content" ></div>
          </div>
          <div class="form-group">
            <label for="text" class="col-form-label">Text</label>
            <textarea name="text" id="text_content" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="mr-auto">Note: Kosongi text untuk menampilkan hanya image</div><br>
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_content"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_slider_edit_gambar" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >View Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_slider_edit" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="text" name="" id = "id_edit_image_slider"  disabled hidden >
            <input type="text" name="" id = "nama_gambar_edit"  disabled hidden >
          </div>
          <div class="row">
            <div class="col-sm">
              <span id="previewbefore" ></span>
            </div>
            <div class="col-sm justify-content-center">
              <span id="arrow_edit" > </span>
            </div>
            <div class="col-sm">
              <span id="previewafter" ></span>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image Background Baru (rekomendasi ukuran 1140x900 px)</label>
            <input type="file" class="form-control" id="slider_image_edit">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_edit_slider"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_content_edit_gambar" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Ubah Gambar Utama Content</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_content_edit_image" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="text" name="" id = "id_edit_image_content"  disabled  >
            <input type="text" name="" id = "gambar_content"  disabled  >
          </div>
          <div class="row">
            <div class="col-sm">
              <span id="previewbefore_content" ></span>
            </div>
            <div class="col-sm justify-content-center">
              <span id="arrow_edit_content" > </span>
            </div>
            <div class="col-sm">
              <span id="previewafter_content" ></span>
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image Background Baru (rekomendasi ukuran 1140x900 px)</label>
            <input type="file" class="form-control" id="image_edit_content">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_edit_content_image"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_slider_text_edit" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Slider Text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_slider_edit_text" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Main Title</label>
            <input type="text" class="form-control" id="slider_title_edit" >
            <input type="text" class="form-control" id="slider_id_edit" disabled hidden>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title</label>
            <input type="text" class="form-control" id="slider_sub_title_edit" >
          </div>
          <div class="form-group">
            <label for="text" class="col-form-label">Text</label>
            <textarea name="text" id="text_slider_edit" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </form>
        <div class="form-group">
        <span id="previewgambaredittext" ></span>
      </div>
    </div>
      <div class="modal-footer">
        <div class="mr-auto">Note: Untuk mengubah gambar, klik tombol Edit Image</div><br>
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_slider_text_edit"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_content_text_edit" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Content Text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: responsive;">
        <form method='post' action='' id="form_content_edit_text" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Main Title</label>
            <input type="text" class="form-control" id="content_title_edit" >
            <input type="text" class="form-control" id="content_id_edit" disabled hidden>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Title</label>
            <input type="text" class="form-control" id="content_sub_title_edit" >
          </div>
          <div class="form-group">
            <label for="text" class="col-form-label">Text</label>
            <textarea name="text" id="text_content_edit" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </form>
        <div class="form-group">
        <span id="previewgambaredittextcontent" ></span>
      </div>
    </div>
      <div class="modal-footer">
        <div class="mr-auto">Note: Untuk mengubah gambar, klik tombol Edit Image</div><br>
        <!-- <span class="float-left">NOTE: Bila halaman belum sesuai, klik Reload page</span -->
        <button type="button" class="btn btn-primary save_content_text_edit"  name="button">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?=base_url()?>/assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/content_halaman.js"></script>
