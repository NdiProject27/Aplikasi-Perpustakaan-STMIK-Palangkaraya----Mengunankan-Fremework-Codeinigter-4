<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> <a href="<?= base_url('buku'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Tambah Data Mahasiswa</h3>
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
        <form class="" method="post" action="<?= base_url('mahasiswa/store') ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim Mahasiswa" value="<?= old('nim'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" value="<?= old('nama'); ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-6">
                        <select name="jurusan" class="form-control" id="jurusan">
                            <option value="pilih">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="pilih">Pilih</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">No
                        Telp</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No.Telp Mahasiswa" value="<?= old('no_telp') ?>" />
                    </div>

                </div>
                <div class="form-group row">

                    <label for="email" class="col-sm-2 col-form-label">Email</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Mahasiswa" value="<?= old('email') ?>" />
                    </div>
                </div>
                <div class="form-group row">

                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat Mahasiswa"><?= old('alamat') ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                    <div class="custom-file col-sm-6">
                        <input type="file" class="custom-file-input" <?= ($validation->hasError('photo')) ? 'is-invalid' : ''; ?> id="foto" name="photo">
                        <div class="invalid-feedback">
                            <?= $validation->getError('photo'); ?>
                        </div>
                        <label class="custom-file-label" for="photo">Pilih Photo </label>
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