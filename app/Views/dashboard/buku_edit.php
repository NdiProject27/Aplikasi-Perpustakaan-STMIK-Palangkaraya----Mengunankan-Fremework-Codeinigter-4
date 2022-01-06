<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><a href="<?= base_url('buku'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Edit Data buku</h3>
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
        <form class="form-horizontal" method="post" action="<?= base_url('buku/update/' . $buku->id_buku) ?>" enctype="multipart/form-data">
            <input type="hidden" name="SampulLama" value="<?= $buku->sampul; ?>">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku->judul; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku->penerbit; ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">kategori</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $buku->kategori; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pengarang" class="col-sm-2 col-form-label">pengarang</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku->pengarang; ?>">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $buku->tahun; ?>">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $buku->deskripsi; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="custom-file col-sm-6">
                        <input type="file" class="custom-file-input" <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?> id="sampul" name="sampul">
                        <div class="invalid-feedback">
                            <?= $validation->getError('sampul'); ?>
                        </div>
                        <label class="custom-file-label" for="sampul"> <?= $buku->sampul; ?></label>
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">


                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>