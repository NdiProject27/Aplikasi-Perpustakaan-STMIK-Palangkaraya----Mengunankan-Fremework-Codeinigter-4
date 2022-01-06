<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> <a href="<?= base_url('pengembalian'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Tambah Data pengembalian Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->


        <form class="" method="POST" action="<?= site_url('pengembalian/' . $pengembalian->id_pengembalian) ?>">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="card-body">

                <div class="form-group row">
                    <label for="id_buku" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-6">
                        <select name="id_buku" class="form-control required">
                            <option value="" hidden></option>
                            <?php foreach ($buku as $key => $value) : ?>
                                <option value="<?= $value->id_buku; ?>" <?= $pengembalian->id_buku == $value->id_buku ? 'selected' : null ?>>
                                    <?= $value->judul; ?>
                                </option>

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
                                <option value="<?= $value->nim; ?>" <?= $pengembalian->nim == $value->nim ? 'selected' : null ?>><?= $value->nim; ?></option>

                            <?php endforeach; ?>
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="tgl_kembali" placeholder="tgl_kembali" value="<?= $pengembalian->tgl_kembali; ?>">
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