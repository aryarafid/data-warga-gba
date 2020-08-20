<!-- konten detail 1 data kk -->
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
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div> -->
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="data_idv_detail" class="table table-bordered table-hover">
                        <!-- table header -->
                        <tr>
                            <th>NIK</th>
                            <th width="1px">:</th>
                            <td colspan="4"><?= $data_idv['nik']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Nama Lengkap</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['nama_lengkap']; ?></td>
                            <th width="25%">Hubungan dalam Keluarga</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['hub_dlm_keluarga']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Nomor KK</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['no_kk']; ?></td>
                            
                            <th width="25%">Jenis Kelamin</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Tempat/Tanggal Lahir</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['tempat_lahir']; ?> / <?= $data_idv['tanggal_lahir']; ?> </td>
                            <th width="25%">Pendidikan</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['pendidikan']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Agama</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['agama']; ?></td>
                            <th width="25%">Jenis Pekerjaan</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['jenis_pekerjaan']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Kewarganegaraan</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['kewarganegaraan']; ?></td>
                            <th width="25%">Status Perkawinan</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['status_perkawinan']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">No Paspor</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['no_paspor']; ?></td>
                            <th width="25%">No KITAP/KITAS</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['no_kitas_kitap']; ?></td>
                        </tr>
                        <tr>
                            <th width="25%">Nama Ayah</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['nama_ayah']; ?></td>
                            <th width="25%">Nama Ibu</th>
                            <th width="1px">:</th>
                            <td><?= $data_idv['nama_ibu']; ?></td>
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
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>