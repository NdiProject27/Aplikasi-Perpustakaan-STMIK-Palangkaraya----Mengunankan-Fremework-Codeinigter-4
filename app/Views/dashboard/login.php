<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css">
    <img class="mb-1" src="/dist/img/Logo.png" alt="" width="150" height="150">
    <h1 class="awal">PERPUSTAKAAN STMIK PALANGKARAYA</h1>
    <h4 class="awal1">PROGRAM BY : ANDI LAFITO | VERSION 1.0</h4>
    <div class="container" id="container">

        <div class="form-container sign-in-container">
            <form action="<?= base_url('/login/process') ?>" method="post">
                <?= csrf_field(); ?>
                <img class="gambar" src="/dist/img/icon.png" alt="" width="110" height="110">
                <h1>Admin Login</h1>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus />
                <input type="password" name="password" id="password" placeholder="Password" class="form-control" required />
                <a href="#">Lupa Password?</a>

                <button>Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="wel">Selamat Datang !</h1>
                    <p class="kata">Silahkan Login Terlebih Dahulu Untuk Menggunakan Aplikasi Perpustakaan STMIK Palangkaraya</p>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>