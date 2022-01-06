<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> <a href="<?= base_url('buku'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Tambah Koleksi Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria- label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form class="" method="post" action="<?= base_url('buku/store') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" value="<?= old('judul'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit Buku" value="<?= old('penerbit'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Buku" value="<?= old('kategori'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang Buku" value="<?= old('pengarang'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Terbit Buku" value="<?= old('tahun'); ?>">
                    </div>
                </div>


                <div class="form-group row">

                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi Singkat Tentang Buku (Maksimal 500 Karakter)"><?= old('deskripsi') ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="custom-file col-sm-6">
                        <input type="file" class="custom-file-input" <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?> id="foto" name="sampul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>
                        <label class="custom-file-label" for="sampul">Pilih Sampul Buku </label>
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