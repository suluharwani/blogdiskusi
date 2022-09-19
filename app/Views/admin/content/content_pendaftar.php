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
        <button type="button" class="btn btn-primary tambah_peserta" data-toggle="modal">Tambah Peserta</button>
      </div>
      <div class="card-body">
        <div class="table-responsive" >
          <table id="tabel_serverside" class="table table-bordered display" cellspacing="0" width="100%">
            <thead>
              <tr  class="text-center">
                <th>NO</th>
                <th>ID PENDAFTARAN</th>
                <th>NAMA LENGKAP</th>
                <th>HP</th>
                <th>EMAIL</th>
                <th>STATUS</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th>NO</th>
                <th>ID PENDAFTARAN</th>
                <th>NAMA LENGKAP</th>
                <th>HP</th>
                <th>EMAIL</th>
                <th>STATUS</th>
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
<div class="modal fade" id="modal_det" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">File Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="">
          <span id="jalur_peserta"></span>
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Variabel</th>
              <th scope="col">Value</th>
            </tr>
          </thead>
          <tbody id = "data_peserta_table">

          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center">
    </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_file_peserta" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">File Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="">
          <span id="jalur_peserta"></span>
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Berkas</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody id = "file_peserta_sesuai_jalur">

          </tbody>
        </table>
        <table class="table" id="tabel_file_peserta">
          <span>File yang telah diunggah</span>
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Berkas</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id = "file_peserta_terupload">

          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
<div class="modal fade" id="modal_tambah_peserta" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Tambah Peserta Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="nik" class="col-form-label">Nomor Induk Kependudukan (NIK):</label>
            <input type="text" class="form-control" id="nik" required placeholder="NIK sesuai KTP">
          </div>
          <div class="form-group">
            <label for="nama_lengkap" class="col-form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" required placeholder="Nama lengkap tanpa gelar dan singkatan sesuai KK. Gunakan Title Case. Contoh: Nicholas Tesla">
          </div>
          <div class="form-group">
            <label for="tempat_lahir" class="col-form-label">Tempat Lahir:</label>
            <input type="email" class="form-control" id="tempat_lahir" required placeholder="Tempat lahir sesuai KK">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" required placeholder="Tempat lahir sesuai KK">
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Alamat Peserta:</label>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Provinsi:</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_prov" alias="Provinsi"></select>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kota/Kab:</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_city" alias="Kota/Kabupaten"></select>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kecamatan:</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_district" alias="Kecamatan"></select>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Dusun/Kelurahan:</label>
            <input type="text"  class="form-control line-height-1 bg-light-5" alias="Dusun/Kelurahan" name="dusun" id="dusun" placeholder="Dusun/Kelurahan" required>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kode Pos:</label>
            <input type="text"  class="form-control line-height-1 bg-light-5" alias="Kode POS" name="kodepos" id="kodepos" placeholder="6 digit kode pos" required>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Jalan:</label>
            <input type="text" class="form-control line-height-1 bg-light-5" alias="Jalan" name="jalan" id="jalan" placeholder="Nama jalan, nomor jalan" required>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">RT:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="RT" name="rt" id="rt" placeholder="Nomor RT" required>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">RW:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="RW" name="rw" id="rw" placeholder=" Nomor RW" required>
          </div>
          <div class="form-group">
            <label for="" class="col-form-label">Jenis Kelamin:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="1">
              <label class="form-check-label" for="jenis_kelamin1">
                Laki-laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="2">
              <label class="form-check-label" for="jenis_kelamin2">
                Perempuan
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="hp" class="col-form-label">HP:</label>
            <input type="text" class="form-control" id="hp" required placeholder="Nomor HP yang bisa dihubungi">
          </div>
          <div class="form-group">
            <label for="hp" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" required placeholder="Email yang bisa dihubungi">
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="agama">Agama:</label>
            <select class="form-select form-select-lg mb-3 form-control line-height-1 bg-light-5" alias="Agama" name="agama" id="agama" aria-label=".form-select-lg example" required>
              <option selected disabled value="">Pilih Agama</option>
              <option value="1">Islam</option>
              <option value="2">Kristen</option>
              <option value="3">Hindu</option>
              <option value="4">Budha</option>
              <option value="5">Katolik</option>
              <option value="6">Khonghucu</option>
              <option value="7">Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="kewarganegaraan">Kewarganegaraan:</label>
            <select class="form-select form-select-lg mb-3 form-control line-height-1 bg-light-5" alias="Kewarganegaraan" name="kewarganegaraan" id="kewarganegaraan" aria-label=".form-select-lg example" required>
              <option selected disabled >Pilih Kewarganegaraan</option>
              <option value="1">Warga Negera Indonesia</option>
              <option value="2">Warga Negara Asing</option>
            </select>
          </div>

          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="pendidikan_terakhir">Pendidikan Terakhir:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="Pendidikan Terakhir" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="CONTOH: SMA-IPA" required>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="nama_sekolah">Nama Sekolah:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="Nama Sekolah" name="nama_sekolah" id="nama_sekolah" required>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_company">Nilai Ijazah:</label>
            <input type="number" value="" class="form-control line-height-1 bg-light-5" alias="Nilai Ijazah" name="nilai" id="nilai"  required>
            <div>Isi dengan 0 bila belum mendapatkan nilai ijazah</div>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Jalur Pendaftaran</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_jalur"></select>
          </div>
          <div class="form-group">
            <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Program Studi:</label>
          </div>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Pilihan 1:</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_prodi1"></select>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Pilihan 2:</label>
            <select class="form-control line-height-1 bg-light-5" aria-label="Default select example" id="select_prodi2"></select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" class="form-control" id="password" required placeholder="min 4 karakter">
            <a class="d-flex align-items-center" onclick="generatePassword()">
                <div>
                    <div class="text-gray-500">Generate Password</div>
                </div>
            </a>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary btn_tambah_peserta">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- detail -->
<div class="modal fade" id="modal_detail_peserta" tabindex="-1" role="dialog" aria-labelledby="modal_tambah_adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambah_adminLabel">Data Peserta Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="nik" class="col-form-label">Nomor Induk Kependudukan (NIK):</label>
            <input type="text" class="form-control" id="det_nik" disabled>
          </div>
          <div class="form-group">
            <label for="nama_lengkap" class="col-form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="det_nama_lengkap" disabled>
          </div>
          <div class="form-group">
            <label for="tempat_lahir" class="col-form-label">Tempat Lahir:</label>
            <input type="email" class="form-control" id="det_tempat_lahir" disabled>
          </div>
          <div class="form-group">
            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="det_tanggal_lahir" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Alamat Peserta:</label>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Provinsi:</label>
            <input type="text" class="form-control" id="det_alamat_prov" disabled>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kota/Kab:</label>
            <input type="text" class="form-control" id="det_alamat_kab" disabled>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kecamatan:</label>
            <input type="text" class="form-control" id="det_alamat_dis" disabled>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Dusun/Kelurahan:</label>
            <input type="text"  class="form-control line-height-1 bg-light-5" alias="Dusun/Kelurahan" name="dusun" id="det_alamat_dusun" disabled>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Kode Pos:</label>
            <input type="text"  class="form-control line-height-1 bg-light-5" alias="Kode POS" name="kodepos" id="det_alamat_kodepos" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Jalan:</label>
            <input type="text" class="form-control line-height-1 bg-light-5" alias="Jalan" name="jalan" id="det_alamat_jalan" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">RT:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="RT" name="rt" id="det_alamat_rt" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">RW:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="RW" name="rw" id="det_alamat_rw" disabled>
          </div>
          <div class="form-group">
            <label for="" class="col-form-label">Jenis Kelamin:</label>
            <input type="text"  class="form-control line-height-1 bg-light-5" name="jenis_kelamin" id="det_jenis_kelamin" disabled>

          </div>
          <div class="form-group">
            <label for="hp" class="col-form-label">HP:</label>
            <input type="text" class="form-control" id="det_hp" disabled>
          </div>
          <div class="form-group">
            <label for="hp" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="det_email" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="agama">Agama:</label>
            <input type="text" class="form-control" id="det_agama" disabled>

          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="kewarganegaraan">Kewarganegaraan:</label>
            <input type="text" class="form-control" id="det_kewarganegaraan" disabled>

          </div>

          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="pendidikan_terakhir">Pendidikan Terakhir:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="Pendidikan Terakhir" name="det_pendidikan_terakhir" id="det_pendidikan_terakhir" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="nama_sekolah">Nama Sekolah:</label>
            <input type="text" value="" class="form-control line-height-1 bg-light-5" alias="Nama Sekolah" name="det_nama_sekolah" id="det_nama_sekolah" disabled>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_company">Nilai Ijazah:</label>
            <input type="number" value="" class="form-control line-height-1 bg-light-5" alias="Nilai Ijazah" name="nilai" id="det_nilai"  disabled>
            <div>Isi dengan 0 bila belum mendapatkan nilai ijazah</div>
          </div>
          <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Jalur Pendaftaran</label>
            <input type="text" class="form-control" id="det_jalur" disabled>
          </div>
          <div class="form-group">
            <div class="form-group">
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Program Studi:</label>
          </div>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Pilihan 1:</label>
            <input type="text" class="form-control" id="det_pilihan1" disabled>
            <label class="text-color-dark font-weight-semibold" for="shipping_address">Pilihan 2:</label>
            <input type="text" class="form-control" id="det_pilihan2" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- detail -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/content_pendaftar.js"></script>
