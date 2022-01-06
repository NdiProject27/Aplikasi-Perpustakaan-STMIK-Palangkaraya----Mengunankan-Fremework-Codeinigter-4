<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | Log in</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,70
0&display=fallback">
    <link rel="stylesheet" href="dist/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="sampul">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <img src="/dist/img/Logo.png" alt="" width="200px" height="200px"><br>
                    <a href="<?= base_url('/') ?>" class="h1"><b>Admin</b>Login</a>
                    <h6>Perpustakaan | STMIK Palangkaraya</h6>
                </div>
                <div class="card-body">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('/login/process') ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3">
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="nav-icon fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>


                        <div class="form-row text-center">
                            <div class="col-12">
                                <a href="" class="btn btn-danger">Reset</a>
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </div>
                        <div class="form-row text-center mt-3">
                            <div class="col-12">
                                <h6>Program by : Andi Lafito Version 1.0</h6>
                            </div>
                        </div>
                        <!-- /.col -->
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>