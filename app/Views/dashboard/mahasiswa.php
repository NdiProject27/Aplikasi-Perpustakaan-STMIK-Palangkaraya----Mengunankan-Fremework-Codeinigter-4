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
    <a href="<?= base_url('/mahasiswa/create'); ?>" class="btn btn-primary">Tambah <i class="fas fa-plus"></i></a>
    <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-success">Refresh <i class=" fas fa-spinner"></i></a>

    <hr />
    <table class="table table-bordered" id="example1">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>No Telp</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) {
            ?>
                <tr class="text-center">
                    <td><?= $no++; ?></td>
                    <td><?= $row->nim; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->jurusan; ?></td>
                    <td><?= $row->no_telp; ?></td>
                    <td><?= $row->jenis_kelamin; ?></td>
                    <td>


                        <a title=" View" href="<?= base_url("mahasiswa/view/$row->nim"); ?>" class="btn btn-success"><i class="fas fa-folder"> </i> View</a>
                        <a title="Edit" href="<?= base_url("mahasiswa/edit/$row->nim"); ?>" class="btn btn-info"><i class="fas fa-pencil-alt"> </i> Edit</a>
                        <a title="Delete" href="<?= base_url("mahasiswa/delete/$row->nim") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="fas fa-trash"> </i> Delete</a>
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