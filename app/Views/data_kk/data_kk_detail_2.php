<!-- konten detail 1 data kk -->
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
                                <th width="25%">NIK Kepala Keluarga</th>
                                <th width="1px">:</th>
                                <td><?= $data_kk['nik_kepala_keluarga']; 
                                //$get_kepala->nama_lengkap; ?></td>
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

</div>

<?= $this->endSection() ?>