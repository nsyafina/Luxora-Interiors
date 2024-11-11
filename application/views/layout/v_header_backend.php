<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 style="margin-left: 10px; color: #0b544b;"><?= $title ?></h3>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">

                    <!-- Profil --><!-- Custom -->
                    <div class="user-panel mt-3 pb-3 d-flex">
                        <div class="image">
                            <img src="<?= base_url('img/admin/profil' . $this->session->userdata('foto')) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?= $this->session->userdata('nama_user'); ?></a>
                        </div>
                    </div>

            </ul>
        </nav>
        <!-- /.navbar -->