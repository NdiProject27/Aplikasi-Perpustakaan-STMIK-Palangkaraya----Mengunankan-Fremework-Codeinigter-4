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
    <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah <i class="fas fa-plus"></i></a>
    <a href="<?= base_url('buku'); ?>" class="btn btn-success">Refresh <i class=" fas fa-spinner"></i></a>
    <hr />
    <table class="table table-bordered" id="example1">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $row) {
            ?>
                <tr class="text-center">
                    <td><?= $no++; ?></td>
                    <td><img src="/sampul/<?= $row->sampul; ?>" alt="" width="75" class=""></td>
                    <td><?= $row->judul; ?></td>
                    <td><?= $row->penerbit; ?></td>
                    <td><?= $row->kategori; ?></td>
                    <td><?= $row->pengarang; ?></td>
                    <td><?= $row->tahun; ?></td>
                    <td>


                        <a title="View" href="<?= base_url("buku/view/$row->id_buku"); ?>" class="btn btn-success"><i class="fas fa-folder"> </i> View</a>
                        <a title="Edit" href="<?= base_url("buku/edit/$row->id_buku"); ?>" class="btn btn-info"><i class="fas fa-pencil-alt"> </i> Edit</a>
                        <a title="Delete" href="<?= base_url("buku/delete/$row->id_buku") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Buku Ini ?')"><i class="fas fa-trash"> </i> Delete</a>
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