<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">
    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <a href="<?= base_url('peminjaman/new'); ?>" class="btn btn-primary">Tambah <i class="fas fa-plus"></i></a>
    <a href="<?= base_url('peminjaman'); ?>" class="btn btn-success">Refresh <i class=" fas fa-spinner"></i></a>
    <hr />
    <table class="table table-bordered" id="example1">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Tanggal Pinjam</th>
                <th>Batas Peminjaman</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($peminjaman as $row) {
            ?>
                <tr class="text-center">
                    <td><?= $no++; ?></td>
                    <td><?= $row->nim; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->judul; ?></td>
                    <td><?= $row->kategori; ?></td>
                    <td><?= $row->pengarang; ?></td>
                    <td><?= date('d F Y', strtotime($row->tgl_pinjam)); ?></td>
                    <td><?= date('d F Y', strtotime($row->tgl_kembali)); ?></td>
                    <td>



                        <a title="Edit" href="<?= site_url('peminjaman/' . $row->id_peminjaman . '/edit'); ?>" class="btn btn-info"><i class="fas fa-pencil-alt"> </i> Edit</a>
                        <form action="<?= site_url('peminjaman/' . $row->id_peminjaman); ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Peminjaman Buku Ini ?');">
                                <i class="fa fa-trash"> </i>
                                Delete!
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>