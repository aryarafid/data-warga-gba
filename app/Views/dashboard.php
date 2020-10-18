<!-- konten Home -->
<?php $session = session() ?>
<?= $this->extend('template/web_frame') ?>

<?= $this->section('content') ?>
<div class="container">
    <?php // echo $this->session->get() ?>
    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-10 text-center">Selamat datang di Aplikasi Administrasi Data KK Perumahan Griya Banyumanik Asri</h2>
        </div>
    </div> -->

    <!-- <div class="jumbotron jumbotron-fluid">
        <h2 class="display-10 text-center">Selamat datang di Aplikasi Administrasi Data KK Perumahan Griya Banyumanik Asri</h2> -->
    <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
    <!-- <hr class="my-4">
        <p>Masuk menu dashboard data KK dengan mengklik tombol berikut</p>
        <a class="btn btn-primary btn-lg" href=<?php echo base_url(); ?>/data_kk" role="button">Learn more</a>
        <a href="<?php echo base_url(); ?>/data_kk" class="btn btn-primary">Menu Dashboard KK</a>
    </div> -->

    <div class="jumbotron text-center">
        <!-- <h1 class="display-4">Hello, world!</h1> -->
        <h2 class="display-5 text-center">Selamat datang di Aplikasi Administrasi Data Warga Perumahan Griya Banyumanik Asri</h2>
        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
        <hr class="my-4">
        <p class="lead">Masuk menu dashboard data KK atau data penduduk dengan memilih antara tombol-tombol berikut</p>
        <a class="btn btn-success btn-lg" href="<?php echo base_url(); ?>/data_kk" role="button">Dashboard Data KK</a>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>/data_idv" role="button">Dashboard Data Penduduk</a>

    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-5">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Kartu Keluarga</span>
                    <span class="info-box-number"> <?= $kkcount;?> </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-5">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Penduduk</span>
                    <span class="info-box-number"> <?= $dvcount;?> </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
</div>
<?= $this->endSection() ?>