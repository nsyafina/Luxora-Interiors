<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | Luxora Interiors</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
</head>
<style>
    body {
        background: linear-gradient(50deg, rgba(11, 84, 75, 1) 0%, rgba(67, 153, 142, 1) 52%, rgba(67, 153, 142, 1) 66%, rgba(20, 116, 105, 1) 100%);
    }

    .card {
        background: linear-gradient(180deg, rgba(67, 153, 142, 1) 0%, rgba(113, 185, 176, 1) 40%, rgba(67, 153, 142, 1) 75%, rgba(11, 84, 75, 1) 100%);
    }

    .logo-login {
        width: 300px;
    }

    .btn-login {
        border: none;
        border-radius: 6px;
        box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
        padding-bottom: 10px;
        cursor: pointer;
        color: white;
        -webkit-text-stroke: 1px rgba(191, 191, 191, 0.409);
        font-weight: bold;
        background-size: 200%;
        background-image: linear-gradient(to left, #ff4500, #f9cd26, #ff4500);
        transition: 0.6s;
    }

    .btn-login:hover {
        background-position: right;
    }
</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-warning">
            <div class="card-header text-center text-white">
                <a href="http://localhost/luxora-interiors/"><img src="../img/logo/long_logo.png" class="logo-login mb-1"></a>
            </div>
            <di class="card-body text-white mb-3">

                <?php
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Error!</h5>', '</div>');

                if ($this->session->flashdata('error')) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-times"></i> Error!</h5>';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }

                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }

                echo form_open('autentifikasi/login_admin')
                ?>
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <!-- /.col -->
                <div class="col-10" style="margin: auto;">
                    <button type="submit" class="btn btn-login btn-block">Login</button>
                </div>
                <!-- /.col -->
                <?php echo form_close() ?>


                <p class="mb-0 mt-3 text-center text-white">
                    No Account? <a href="register.html" class="text-center text-white border-bottom">Sign Up</a>
                </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>template/dist/js/adminlte.min.js"></script>
</body>

</html>