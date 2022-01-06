<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

Content Di sini untuk Home Admin
<div class="alert alert-success" role="alert">
    Selamat Datang <?= userLogin()->name ?>, di Aplikasi Perpustakaan STMIK Palangkaraya !
</div>

<?= $this->endSection('content'); ?>