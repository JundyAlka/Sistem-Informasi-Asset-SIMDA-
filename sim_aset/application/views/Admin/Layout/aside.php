<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url("Admin/cDashboard") ?>" class="brand-link d-flex align-items-center" style="padding: 10px 16px; min-height: 80px; gap: 14px;">
        <span style="display:inline-block; width:64px; height:64px; border-radius:50%; overflow:hidden; background:#fff; box-shadow:0 2px 8px rgba(0,0,0,0.10); border:3px solid #fff; padding:4px;">
    <img src="<?= base_url("asset/dinas_purworejo_logo.png") ?>" alt="Dinas Purworejo Logo" style="width:100%; height:100%; object-fit:contain; display:block;">
</span>
        <span class="brand-text" style="font-size: 1.4rem; font-weight: 700; line-height: 1.2;">SIMDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-size:1.15rem; font-weight:700; color:#fff;">Selamat Datang,<br>Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cDashboard') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
                                                                                        echo 'active';
                                                                                    }  ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData') {
                                                        echo 'menu-open';
                                                    }  ?>">
                    <a href="<?= base_url('Admin/cKelolaData') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData') {
                                                                                        echo 'active';
                                                                                    }  ?>">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Data Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <style>
.sidebar-radio {
  display: inline-block;
  width: 18px;
  height: 18px;
  border: 2px solid #fff;
  border-radius: 50%;
  background: transparent;
  position: relative;
  margin-right: 10px;
  vertical-align: middle;
}
.sidebar-radio-dot {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 8px;
  height: 8px;
  background: #fff;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  border: none;
  box-shadow: none;
}
.sidebar-radio-green {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: #27ae60;
  border-radius: 50%;
  margin-right: 14px;
  vertical-align: middle;
}
</style>
<ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="<?= base_url('Admin/cKelolaData/kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'kategori') { echo 'active'; }  ?>">
            <span class="sidebar-radio">
                <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'kategori') { ?>
                    <span class="sidebar-radio-dot"></span>
                <?php } ?>
            </span>
            <p>Kategori</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= base_url('Admin/cKelolaData/barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'barang') { echo 'active'; }  ?>">
            <span class="sidebar-radio">
                <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'barang') { ?>
                    <span class="sidebar-radio-dot"></span>
                <?php } ?>
            </span>
            <p>Barang</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= base_url('Admin/cKelolaData/lokasi') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'lokasi') { echo 'active'; }  ?>">
            <span class="sidebar-radio">
                <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKelolaData' && $this->uri->segment(3) == 'lokasi') { ?>
                    <span class="sidebar-radio-dot"></span>
                <?php } ?>
            </span>
            <p>Lokasi</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= base_url("Admin/cKelolaData/user") ?>" class="nav-link <?php if ($this->uri->segment(1) == "Admin" && $this->uri->segment(2) == "cKelolaData" && $this->uri->segment(3) == "user") { echo "active"; }  ?>">
            <span class="sidebar-radio">
                <?php if ($this->uri->segment(1) == "Admin" && $this->uri->segment(2) == "cKelolaData" && $this->uri->segment(3) == "user") { ?>
                    <span class="sidebar-radio-dot"></span>
                <?php } ?>
            </span>
            <p>User</p>
        </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cAsset') ?>" class="nav-link  <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAsset') {
                                                                                    echo 'active';
                                                                                }  ?>">
                        <i class="nav-icon fas fa-barcode"></i>
                        <p>
                            Aset
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cPengajuan') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPengajuan') {
                                                                                        echo 'active';
                                                                                    }  ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= base_url('Admin/cMonitoring') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cMonitoring') {
                                                                                            echo 'active';
                                                                                        }  ?>">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Monitoring</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('Admin/cPenyusutan') ?>" class="nav-link   <?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cPenyusutan') {
                                                                                            echo 'active';
                                                                                        }  ?>">
                        <i class="nav-icon fas fa-clipboard-check"></i>
                        <p>Penyusutan</p>
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