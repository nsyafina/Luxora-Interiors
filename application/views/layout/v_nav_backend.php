<!-- Main Sidebar Container -->
<aside class="sidebar-custom main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/luxora-interiors/" class="brand-link" style="border: none;">
        <img src="<?php echo base_url('img/logo/long_logo.png'); ?>" class="logo-brand elevation-5">
        <!-- Divider -->
        <hr class="sidebar-divider" style="background-color:white;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="margin:0;">

        <!-- Sidebar Menu -->
        <nav style="margin:0;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link
                    <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '') {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('kategori') ?>" class="nav-link
                    <?php if ($this->uri->segment(1) == 'kategori') {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>
                            Data Kategori
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('barang') ?>" class="nav-link
                    <?php if ($this->uri->segment(1) == 'barang') {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-solid fa-couch"></i>
                        <p>
                            Data Barang
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('user') ?>" class="nav-link
                    <?php if ($this->uri->segment(1) == 'user') {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/setting') ?>" class="nav-link 
                    <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'setting') {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('autentifikasi/logout_admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                        <p>
                            Log out
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">