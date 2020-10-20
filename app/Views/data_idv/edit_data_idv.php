<?= $this->extend('template/web_frame') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- tambah button here -->
    <div class="row ">
        <div class="col float-right">

            <div class="btn-group">
                <a href="<?= base_url() . '/data_idv'; ?>" class="btn btn-primary float-right">
                    <i class="fa fa-angle-left fa-md text-default"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
    <!-- breadcrumb/tombol kembali -->

    <div class="row">
        <div class="col">
            <form method="post" action="<?= base_url();?>/data_idv/edit_idv_aksi">
                <div class="card card-primary">
                    <!-- <div class="card-header"> -->
                    <!-- <h4 class="card-title">Tambah Pegawai</h4> -->
                    <!-- </div> -->
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <!-- nanti ada if errornya di sini -->
                                    <?php // echo $this->session->flashdata('msg'); 
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" value="<?= $data_idv['nik'] ?>" id="nik" name="nik" placeholder="Masukkan NIK" required>
                            </div>

                            <div class="form-group">
                                <label for="no_kk">No. Kartu Keluarga</label>
                                <input type="number" class="form-control" value="<?= $data_idv['no_kk'] ?>" id="no_kk" name="no_kk" placeholder="Masukkan nomor KK" required="">
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['nama_lengkap'] ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <!-- <input type="text" class="form-control" value=" " id="jenis_kelamin" name="jenis_kelamin" placeholder="Masukkan lama kerja dalam tahun" required=""> -->
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option selected><?= $data_idv['jenis_kelamin'] ?></option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" maxlength="13" class="form-control" value="<?= $data_idv['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" value="<?= $data_idv['tanggal_lahir'] ?>" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['agama'] ?>" id="agama" name="agama" placeholder="Masukkan isian agama" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['pendidikan'] ?>" id="pendidikan" name="pendidikan" placeholder="Masukkan pendidikan terakhir" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['jenis_pekerjaan'] ?>" id="jenis_pekerjaan" name="jenis_pekerjaan" placeholder="Masukkan jenis pekerjaan" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="status_perkawinan">Status Perkawinan</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['status_perkawinan'] ?>" id="status_perkawinan" name="status_perkawinan" placeholder="Masukkan status perkawinan" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="hub_dlm_keluarga">Hubungan dalam Keluarga</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['hub_dlm_keluarga'] ?>" id="hub_dlm_keluarga" name="hub_dlm_keluarga" placeholder="Masukkan hubungan dalam keluarga" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <input type="text" class="form-control" value="<?= $data_idv['kewarganegaraan'] ?>" id="kewarganegaraan" name="kewarganegaraan" placeholder="Masukkan kewarganegaraan" required>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="no_paspor">No. Paspor</label>
                                        <input type="number" class="form-control" value="<?= $data_idv['no_paspor'] ?>" id="no_paspor" name="no_paspor" placeholder="Masukkan nomor paspor">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="no_kitas_kitap">No. KITAS/KITAP</label>
                                        <input type="number" class="form-control" value="<?= $data_idv['no_kitas_kitap'] ?>" id="no_kitas_kitap" name="no_kitas_kitap" placeholder="Masukkan nomor KITAS/KITAP">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['nama_ayah'] ?>" id="nama_ayah" name="nama_ayah" placeholder="Masukkan nama ayah">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input type="text" class="form-control" value="<?= $data_idv['nama_ibu'] ?>" id="nama_ibu" name="nama_ibu" placeholder="Masukkan nama ibu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>

        <?= $this->endSection() ?>