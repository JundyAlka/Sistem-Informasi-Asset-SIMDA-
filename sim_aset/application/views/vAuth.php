<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/AdminLTE/') ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<style>
    .login-page {
        background: #f8f9fa;
        position: relative;
    }
    .login-logo {
        margin-bottom: 20px;
        text-align: center;
    }
    .login-logo img {
        width: 150px;
        height: 150px;
        object-fit: contain;
        margin-bottom: 15px;
        border-radius: 0;
        border: none;
        box-shadow: none;
        background: transparent;
        padding: 0;
    }
    .login-box {
        width: 400px;
        margin: 5% auto;
    }
    .card {
        border-radius: 28px;
        box-shadow: 0 6px 40px rgba(30,60,114,0.10);
    }
    .login-card-body {
        padding: 40px 32px 32px 32px;
        border-radius: 24px;
        background: #fff;
    }
    .login-card-body .form-control {
        border-radius: 12px;
        padding: 14px 16px;
        font-size: 1.05rem;
        margin-bottom: 18px;
        border: 1.5px solid #e0e6ed;
        transition: border 0.2s;
    }
    .login-card-body .form-control:focus {
        border-color: #1e90ff;
        box-shadow: 0 0 0 2px rgba(30,144,255,0.07);
    }
    .login-card-body .btn-primary {
        border-radius: 10px;
        font-size: 1.08rem;
        font-weight: 600;
        padding: 12px 0;
        background: linear-gradient(90deg, #1976d2 0%, #1e90ff 100%);
        border: none;
        box-shadow: 0 2px 8px rgba(30,144,255,0.12);
        transition: background 0.2s;
    }
    .login-card-body .btn-primary:hover {
        background: linear-gradient(90deg, #1565c0 0%, #1976d2 100%);
    }
    .input-group {
        border: 1.5px solid #e0e6ed;
        border-radius: 12px;
        background: #f8fafc;
        margin-bottom: 18px;
        box-shadow: none;
        height: 48px;
        overflow: hidden;
    }
    .input-group .form-control {
        border: none !important;
        background: transparent !important;
        box-shadow: none !important;
        font-size: 1.05rem;
        padding: 12px 16px 12px 16px;
        height: 100%;
        line-height: 1.4;
        vertical-align: middle;
    }
    .input-group .input-group-text {
        background: transparent;
        border: none;
        color: #888;
        font-size: 1.18rem;
        height: 100%;
        padding: 0 16px;
        display: flex;
        align-items: center;
        vertical-align: middle;
    }
    .input-group .form-control,
    .input-group .input-group-text {
        margin-top: 0;
        margin-bottom: 0;
    }
</style>

<body class="hold-transition login-page" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
    <div class="login-box">
        <div class="login-logo">
            <img src="https://data.purworejokab.go.id/uploads/group/2024-03-13-044258.386863483px-LambangKabupatenPurworejo.png" alt="Logo Kabupaten Purworejo">
            <div style="margin-top: 10px; color: #fff; font-size: 24px; font-weight: bold;">
                SISTEM INFORMASI ASSET<br>
                <span style="font-size: 24px; font-weight: 550;">Kabupaten Purworejo</span>
            </div>
        </div>
        <?php
        if ($this->session->userdata('error')) {
        ?>
            <div class="callout callout-danger">
                <h5>Error!</h5>
                <p><?= $this->session->userdata('error') ?></p>
            </div>
        <?php
        }
        ?>
        <?php
        if ($this->session->userdata('success')) {
        ?>
            <div class="callout callout-success">
                <h5>Sukses!</h5>
                <p><?= $this->session->userdata('success') ?></p>
            </div>
        <?php
        }
        ?>

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg" style="margin-bottom: 30px; color: #333; font-size: 1.08rem;">Sign in to start your session</p>

                <form action="<?= base_url('cAuth') ?>" method="post">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" value="admin" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" value="admin" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>

</body>

</html>
