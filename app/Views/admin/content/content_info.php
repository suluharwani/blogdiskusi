<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Halaman Informasi</h1>
  <p class="mb-4">Manage Halaman Informasi <a target="_blank"


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">

      </div>
      <div class="card-header py-3">
      </div>
      <div class="card-body">
        <form method="post" enctype='multipart/form-data'>
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="email" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Judul Informasi">
            <input type="email" class="form-control" id="id" aria-describedby="emailHelp" hidden>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Sub Title</label>
            <input type="text" class="form-control" id="sub_title" placeholder="Sub Judul">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <textarea name="text" id="deskripsi" class="form-control deskripsi" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">PDF File</label>
            <input type="file" class="form-control" id="file_info" >
          </div>
          <div class="form-check">
            <div class="flex flex-wrap justify-center">
              <div id="preview" class="preview" ></div>
            </div>
          </div>
        </form>
        <button type="button" class="btn btn-primary float-right save_info"  name="button">Save</button>

        <div class="my-2"></div>
        <p class="mb-0 small">Note: Data menunjukkan change log 1000 data terakhir</p>

    </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- modal -->

<script type="text/javascript" src="<?=base_url()?>/assets/tinymce/tinymce.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>/assets/js/content_halaman_info.js"></script>
