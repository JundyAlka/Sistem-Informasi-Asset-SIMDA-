<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('KepalaDesa/cDashboard') ?>" class="brand-link">
        <img src="<?= base_url('asset/AdminLTE/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-dark">Desa Cipasung</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Selamat Datang, <br>Kepala Desa</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cDashboard') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cDashboard') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Menu Data Master -->
                <li class="nav-item <?= (in_array($this->uri->segment(2), ['cKategori', 'cBarang', 'cLokasi', 'cUser'])) ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= (in_array($this->uri->segment(2), ['cKategori', 'cBarang', 'cLokasi', 'cUser'])) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('KepalaDesa/cKategori') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cKategori') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('KepalaDesa/cBarang') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cBarang') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('KepalaDesa/cLokasi') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cLokasi') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Lokasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('KepalaDesa/cUser') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cUser') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cKeputusan') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cKeputusan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Asset</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cPengajuan') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cPengajuan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cMonitoring') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cMonitoring') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>Monitoring</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cPenyusutan') ?>" class="nav-link <?= ($this->uri->segment(2) == 'cPenyusutan') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>Penyusutan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('KepalaDesa/cLaporan') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'KepalaDesa' && $this->uri->segment(2) == 'cLaporan') {
                                                                                            echo 'active';
                                                                                        }  ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('cAuth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>SignOut</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>