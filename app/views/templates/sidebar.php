<!-- sidebar.php -->
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                SIPIRA
            </li>

            <?php if ($_SESSION['level'] == 0) : ?>
                <!-- Jika level adalah 0, hanya tampilkan menu berikut -->
                <li>
                    <a href="<?= BASEURL; ?>/pinjam/dashboard" class="nav-link">
                        <span class="material-symbols-outlined">
                            home
                        </span> Beranda
                    </a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?= BASEURL; ?>" class="nav-link">
                        <span class="material-symbols-outlined">
                            home
                        </span> Beranda
                    </a>
                </li>
                <li class="header">
                    Data Master
                </li>
                <?php if ($_SESSION['level'] != 2) : ?>
                    <li>
                        <a href="<?= BASEURL; ?>/jurusan" class="nav-link">
                            <span class="material-symbols-outlined">
                                apartment
                            </span>
                            Data Jurusan
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?= BASEURL; ?>/ruangan" class="nav-link">
                        <span class="material-symbols-outlined">
                            domain
                        </span>
                        Data Ruangan
                    </a>
                </li>
                <?php if ($_SESSION['level'] != 2) : ?>
                    <li>
                        <a href="<?= BASEURL; ?>/mahasiswa" class="nav-link">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                            Data Pengguna
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?= BASEURL; ?>/peminjaman" class="nav-link">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        Data Peminjaman
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/laporan" class="nav-link">
                        <span class="material-symbols-outlined">
                            lab_profile
                        </span>
                        Laporan
                    </a>
                </li>
            <?php endif; ?>
            
            <li class="header">
                Peminjaman
            </li>
            <li>
                <a href="<?= BASEURL; ?>/pinjam" class="nav-link">
                    <span class="material-symbols-outlined">
                        event_available
                    </span>
                    Pinjam Ruangan
                </a>
            </li>
            <li>
                <a href="<?= BASEURL ?>/pinjam/peminjaman_saya" class="nav-link">
                    <span class=" material-symbols-outlined">
                        user_attributes
                    </span>
                    Peminjaman Saya
                </a>
            </li>
            <li class="header">
                Lainnya
            </li>
            <li>
                <a href="<?= BASEURL; ?>/pengaturan" class="nav-link">
                    <span class="material-symbols-outlined">
                        settings
                    </span>
                    Pengaturan
                </a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <script src="<?= BASEURL ?>/js/custom-script.js"></script>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">