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
                    <a href="<?= base_url(); ?>/data_kk/tambah_kk" class="btn-sm btn-block btn-primary ">
                        <button type="button" class="btn btn-block btn-primary">Tambah Data Kartu Keluarga</button>
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
                                <th>Nomor Kartu Keluarga</th>
                                <th>NIK Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>Tanggal Keluar KK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <!-- table body -->
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_kk as $dk) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $dk['no_kartu_keluarga']; ?></td>
                                    <td><?= $dk['nik_kepala_keluarga']; ?></td>
                                    <td><?= $dk['alamat']; ?></td>
                                    <td><?= $dk['tanggal_keluar']; ?></td>
                                    <td>
                                        <?php if (($session->masuk) == FALSE) {  ?>
                                            <a href="<?= base_url(); ?>/data_kk/detail/<?= $dk['no_kartu_keluarga']; ?>">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        <?php } else { ?>
                                            <a href="<?= base_url(); ?>/data_kk/detail/<?= $dk['no_kartu_keluarga']; ?>">
                                                <button type="button" class="btn btn-primary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url(); ?>/data_kk/edit_kk/<?= $dk['no_kartu_keluarga']; ?>">
                                                <button type="button" class="btn btn-success">
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="<?= base_url(); ?>/data_kk/hapus_kk/<?= $dk['no_kartu_keluarga']; ?>">
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