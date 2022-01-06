<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> <a href="<?= base_url('pengembalian'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Tambah Data Pengembalian Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->


        <form class="" method="POST" action="<?= base_url('pengembalian') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">


                <div class="form-group row">
                    <label for="id_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-6">
                        <select name="id_buku" class="form-control required">
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku; ?>"><?= $value->judul; ?></option>

                            <?php endforeach; ?>
                            <option value=""></option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">Nim Mahasiswa</label>
                    <div class="col-sm-6">
                        <select name="nim" class="form-control required">
                            <option value="" hidden></option>
                            <?php foreach ($mahasiswa as $key => $value) : ?>
                                <option value="<?= $value->nim; ?>"><?= $value->nim; ?></option>

                            <?php endforeach; ?>
                            <option value=""></option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal pengembalian</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="tgl_kembali" placeholder="tgl_kembali">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                <button type="reset" class="btn btn-success">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>