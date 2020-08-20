<!-- konten detail 1 data kk -->
<?= $this->extend('template/web_frame') ?>

<?= $this->section('content') ?>

<div class="container">
    <!-- tambah button here -->
    <!-- <div class="row">
        <div class="col-3">
            <div class="card">
                <a href="#" class="btn btn-block btn-success">
                    <button type="button" class="btn btn-block btn-primaty">Tambah Data Kartu Keluarga</button>
                </a>
            </div>
        </div>
    </div> -->
    <div class="row ">
        <div class="col float-right">
            <div class="btn-group">
                <a href="<?= base_url() . '/export_kk/pilih_kk'; ?>" class="btn btn-primary float-right">
                    <i class="fa fa-angle-left fa-md text-default"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div class="col float-right">
            <div class="btn-group">
                <a href="<?= base_url(); ?>/export_kk/Excell/<?= $no_kk;?>" class="btn btn-success float-right">
                    <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    Unduh File Excel
                </a>
            </div>
        </div>
    </div>
    <!-- breadcrumb/tombol kembali -->

    <div class="row">
        <div class="col">
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div> -->
                <!-- /.card-header -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data_kk_detail" class="table table-bordered table-hover">
                            <!-- table header -->
                            <tr>
                                <th width="25%">Nomor Kartu Keluarga</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['no_kartu_keluarga']; ?></td>
                                <th width="25%">Kecamatan</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['kecamatan']; ?></td>
                            </tr>
                            <tr>
                                <th width="25%">Nama Kepala Keluarga</th>
                                <th width="1px">:</th>
                                <td><?= $get_kepala->nama_lengkap; ?></td>
                                <!-- nama kepala keluarga dari data individu  -->
                                <th width="25%">Kabupaten/Kota</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['kabupaten_kota']; ?></td>
                            </tr>
                            <tr>
                                <th width="25%">Alamat</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['alamat']; ?></td>
                                <th width="25%">Provinsi</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['provinsi']; ?></td>
                            </tr>
                            <tr>
                                <th width="25%">RT/RW</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['rt']; ?> / <?= $data_kk['rw']; ?></td>
                                <th width="25%">Kode Pos</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['kode_pos']; ?></td>
                            </tr>
                            <tr>
                                <th width="25%">Desa/Kelurahan</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['desa_kelurahan']; ?></td>
                                <th width="25%">Tanggal Keluar Kartu Keluarga</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['tanggal_keluar']; ?></td>
                            </tr>
                            <!-- table body -->

                            <!-- tfoot -->
                            <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nomor Kartu Keluarga</th>
                                <th>NIK Kepala Keluarga</th>
                                <th>Alamat(s)</th>
                                <th>Tanggal Keluar</th>
                                <th>Detail</th>
                            </tr>
                        </tfoot> -->
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Anggota Keluarga</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="anggota_keluarga" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Agama</th>
                                    <th>Pendidikan</th>
                                    <th>Jenis Pekerjaan</th>
                                </tr>
                            </thead>
                            <!-- table body -->
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($get_kelg as $gk) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $gk->nik; ?></td>
                                        <td><?= $gk->nama_lengkap; ?></td>
                                        <td><?= $gk->jenis_kelamin; ?></td>
                                        <td><?= $gk->tempat_lahir; ?> / <?= $gk->tanggal_lahir; ?></td>
                                        <td><?= $gk->agama; ?></td>
                                        <td><?= $gk->pendidikan; ?></td>
                                        <td><?= $gk->jenis_pekerjaan; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <!-- <div class="card-header">
                    <h5>Anggota Keluarga</h5>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="anggota_keluarga" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status Perkawinan</th>
                                    <th>Hubungan Dalam Keluarga</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Nomor Paspor / Nomor KITAS/KITAP</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                </tr>
                            </thead>
                            <!-- table body -->
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($get_kelg as $gk) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $gk->status_perkawinan; ?></td>
                                        <td><?= $gk->hub_dlm_keluarga; ?></td>
                                        <td><?= $gk->kewarganegaraan; ?></td>
                                        <td><?= $gk->no_paspor; ?> / <?= $gk->no_kitas_kitap; ?></td>
                                        <td><?= $gk->nama_ayah; ?></td>
                                        <td><?= $gk->nama_ibu; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>