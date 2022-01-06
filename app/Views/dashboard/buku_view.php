<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
    <!-- general form elements -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.card-header -->
                <!-- form start -->
                <div class="col-md-3">
                    <!-- Profile Image -->

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <h2 class="text-bold">Cover Buku</h2>
                                <img class="profile-user" width="251" src="/sampul/<?= $buku->sampul; ?>" alt="User profile picture">
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-9">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> <a href="<?= base_url('buku'); ?>" class="btn btn-primary"> <i class=" fas fa-arrow-left"></i></a> Tentang Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>
                                Judul Buku</strong>
                            <p class="text-muted">
                                <?= $buku->judul; ?>
                                <hr>
                                <strong><i class=" fas fa-user mr-1"></i> Pengarang</strong>
                            <p class="text-muted"><?= $buku->pengarang; ?></p>

                            <hr>
                            <strong><i class="fas fa-calendar mr-1"></i> Tahun Terbit</strong>
                            <p class="text-muted"><?= $buku->tahun; ?></p>
                            <hr>
                            <strong><i class="fas fa-cubes mr-1"></i>
                                Penerbit</strong>
                            <p class="text-muted"><?= $buku->penerbit;
                                                    ?></p>
                            <hr>
                            <strong><i class="fas fa-edit mr-1"></i>
                                Deskripsi Buku</strong>
                            <p class="text-muted"><?= $buku->deskripsi;
                                                    ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.card -->
        </div>
</div>
<?= $this->endSection('content'); ?>