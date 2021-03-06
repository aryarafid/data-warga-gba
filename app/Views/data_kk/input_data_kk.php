<?= $this->extend('template/web_frame') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- tambah button here -->
    <div class="row ">
        <div class="col float-right">

            <div class="btn-group">
                <a href="<?= base_url() . '/data_kk'; ?>" class="btn btn-primary float-right">
                    <i class="fa fa-angle-left fa-md text-default"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
    <!-- breadcrumb/tombol kembali -->

    <div class="row">
        <div class="col">
            <form method="post" action="<?= base_url();?>/data_kk/tambah_kk_aksi">
                <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <!-- nanti ada if errornya di sini -->
                                    <?php // echo $this->session->flashdata('msg'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="no_kartu_keluarga">No. Kartu Keluarga</label>
                                        <input type="text" class="form-control" value="" id="no_kartu_keluarga" name="no_kartu_keluarga" placeholder="Masukkan No.KK" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tanggal_keluar">Tanggal Keluar KK</label>
                                        <input type="date" class="form-control" value="" id="tanggal_keluar" name="tanggal_keluar" placeholder="Masukkan tanggal keluar KK" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nik_kepala_keluarga">NIK Kepala Keluarga</label>
                                <input type="text" class="form-control" value="" id="nik_kepala_keluarga" name="nik_kepala_keluarga" placeholder="Masukkan NIK kepala keluarga" required="">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" value="Griya Banyumanik Asri no. " id="alamat" name="alamat" placeholder="Masukkan alamat rumah tempat tinggal" required>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="rt">RT</label>
                                        <input type="text" maxlength="13" class="form-control" value="11" id="rt" name="rt" placeholder="Masukkan nomor RT tempat tinggal" required="">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="rw">RW</label>
                                        <input type="text" class="form-control" value="02" id="rw" name="rw" placeholder="Masukkan nomor RW tempat tinggal" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="desa_kelurahan">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" value="Banyumanik" id="desa_kelurahan" name="desa_kelurahan" placeholder="Masukkan desa/kelurahan tempat tinggal" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" value="Banyumanik" id="kecamatan" name="kecamatan" placeholder="Masukkan kecamatan tempat tinggal" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="kabupaten_kota">Kabupaten/Kota</label>
                                        <input type="text" class="form-control" value="Semarang" id="kabupaten_kota" name="kabupaten_kota" placeholder="Masukkan kabupaten/kota tempat tinggal" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" class="form-control" value="Jawa Tengah" id="provinsi" name="provinsi" placeholder="Masukkan provinsi tempat tinggal" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" class="form-control" value="50264" id="kode_pos" name="kode_pos" placeholder="Masukkan kode pos tempat tinggal" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    <!-- </form> -->
                </div>
            </form>
        </div>

        <?= $this->endSection() ?>