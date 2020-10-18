<?= $this->extend('template/web_frame') ?>
<?= $this->section('content') ?>

<div class="container">
    <!-- tambah button here -->
    <div class="row ">
        <div class="col">

            <form role="form" method="post" action="<?php echo base_url(); ?>/export_kk">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Kartu Keluarga</label>
                                <select class="form-control select2" name="ex_pilih_kk" required="">
                                    <option value="">--Pilih KK--</option>
                                    <?php
                                    foreach ($data_kk as $dk) {
                                        echo "<option>";
                                        echo $dk['no_kartu_keluarga'];
                                        echo "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>

                    </div>


                </div>
                <div class="card-footer">
                    <!-- <div class="col-sm-2">&nbsp;</div> -->
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary col-md-5 float-right">Tampil</button>
                    </div>
                </div>
            </form>
        </div>
        <?= $this->endSection() ?>