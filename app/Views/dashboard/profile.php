<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>


<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="dist/img/andi.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Andi Lafito</h3>

                <p class="text-muted text-center">Teknik Informatika</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Umur</b> <a class="float-right">19 Tahun</a>
                    </li>
                    <li class="list-group-item">
                        <b>Tinggi Badan</b> <a class="float-right">170 Cm</a>
                    </li>
                    <li class="list-group-item">
                        <b>Berat Badan</b> <a class="float-right">74 Kg</a>
                    </li>
                    <li class="list-group-item">
                        <b>Golongan Darah</b> <a class="float-right">???</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Update</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->


    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tentang Saya</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>

                <p class="text-muted">
                    Berkuliah di STMIK Palangkaraya | Program Study Teknik Informatika
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">Jl. Lamtorongung II Blok D No.143 Kota Palangkaraya</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                    <span class="tag tag-danger">Desain Grafis, </span>
                    <span class="tag tag-danger">Photography, </span>
                    <span class="tag tag-danger">,Office, </span>
                    <span class="tag tag-success">HTML, </span>
                    <span class="tag tag-success">CSS, </span>
                    <span class="tag tag-warning">PHP</span>
                    <span class="tag tag-primary"></span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Tidak ada kata terlambat untuk belajar, kalo bukan sekarang kapan lagi!
                </p>

                <hr>

                <strong><i class="far fa-map mr-1"></i> Asal</strong>

                <p class="text-muted">Desa Hampalit -Kecamatan Katingan Hilir- Kabupaten Katingan
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>




<?= $this->endSection('content'); ?>