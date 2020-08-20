<!-- konten dashboard data kk -->
<?= $this->extend('template/web_frame') ?>

<?= $this->section('content') ?>

<?php $session = session(); ?>

<div class="container">
    <!-- tambah button here -->
    <?php if ($session->masuk !== FALSE) { ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <a href="<?= base_url(); ?>/data_idv/tambah_idv" class="btn-sm btn-block btn-primary ">
                        <button type="button" class="btn btn-block btn-primary">Tambah Data Penduduk</button>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <div class="col">
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div> -->
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="data_kk" class="table table-bordered table-striped">
                        <!-- table header -->
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Kartu Keluarga</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <!-- table body -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_idv as $dv) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dv['nik']; ?></td>
                                    <td><?= $dv['nama_lengkap']; ?></td>
                                    <td><?= $dv['no_kk']; ?></td>
                                    <td>
                                        <?php if (($session->masuk) == FALSE) {
                                        ?>
                                            <a href="<?= base_url(); ?>/data_idv/detail/<?= $dv['nik']; ?>">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                        <?php } else { ?>

                                            <a href="<?= base_url(); ?>/data_idv/detail/<?= $dv['nik']; ?>">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url(); ?>/data_idv/edit_idv/<?= $dv['nik']; ?>">
                                                <button type="button" class="btn btn-success">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url(); ?>/data_idv/hapus_idv/<?= $dv['nik']; ?>">
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </a>

                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
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