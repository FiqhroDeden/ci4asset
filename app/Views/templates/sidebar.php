<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Aplikasi Asset</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AS</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
            <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-chart-pie"></i><span>Statistik</span></a></li>

        </ul>
        <?php if (in_groups('admin')) : ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Master</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Master Data</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('barang/index'); ?>">Barang</a></li>
                        <li><a class="nav-link" href="<?= base_url('kategori/index'); ?>">Kategori Barang</a></li>
                        <li><a class="nav-link" href="<?= base_url('lokasi/index'); ?>">Lokasi Aset</a></li>
                        <li><a class="nav-link" href="<?= base_url('user/index'); ?>">User</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-building"></i><span>Data Aset</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('berwujud/index'); ?>">Berwujud</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Dihapuskan</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-balance-scale"></i><span>Keputusan Pengadaan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('beasiswa/index'); ?>">Data Kriteria</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Data Aset</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Nilai / Proses SPK</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-luggage-cart"></i><span>Pengadaan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('beasiswa/index'); ?>">Pengajuan</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Lihat Data</a></li>
                    </ul>
                </li>
                <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-heartbeat"></i><span>Monitoring</span></a></li>
                <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-chart-area"></i><span>Penyusutan</span></a></li>
                <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-exclamation-triangle"></i><span>Penghapusan</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('beasiswa/index'); ?>">Data Asset</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Pengadaan</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">Penghapusan</a></li>
                        <li><a class="nav-link" href="<?= base_url('pengajuan/index'); ?>">QR Code</a></li>
                    </ul>
                </li>
                <li> <a href="<?= base_url('dashboard/index'); ?>" class="nav-link"><i class="fas fa-cog"></i><span>Pengaturan</span></a></li>

            </ul>
        <?php endif; ?>


    </aside>
</div>