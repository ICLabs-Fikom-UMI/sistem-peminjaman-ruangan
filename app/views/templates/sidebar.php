<!-- sidebar.php -->
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                SIPIRA
            </li>
            <li>
                <a href="<?= BASEURL; ?>">
                    <span class="material-symbols-outlined">
                        home
                    </span> Beranda
                </a>
            </li>
            <?php if ($_SESSION['level'] == 0) : ?>
                <!-- Jika level adalah 0, hanya tampilkan menu berikut -->
                <li class="header">
                    Peminjaman
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pinjam" class="nav-link active">
                        <span class="material-symbols-outlined">
                            event_available
                        </span>
                        Pinjam Sekarang
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/pinjam/peminjaman_saya">
                        <span class="material-symbols-outlined">
                            user_attributes
                        </span>
                        Peminjaman Saya
                    </a>
                </li>
                <li class="header">
                    Lainnya
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pengaturan">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        Pengaturan
                    </a>
                </li>
            <?php elseif ($_SESSION['level'] == 2) : ?>
                <!-- Jika level adalah 2, tampilkan semua menu kecuali data jurusan dan data pengguna -->
                <li class="header">
                    Data Master
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/ruangan">
                        <span class="material-symbols-outlined">
                            domain
                        </span>
                        Data Ruangan
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/peminjaman">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        Data Peminjaman
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/laporan">
                        <span class="material-symbols-outlined">
                            lab_profile
                        </span>
                        Laporan
                    </a>
                </li>
                <li class="header">
                    Peminjaman
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pinjam" class="nav-link active">
                        <span class="material-symbols-outlined">
                            event_available
                        </span>
                        Pinjam Ruangan
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/pinjam/peminjaman_saya">
                        <span class="material-symbols-outlined">
                            user_attributes
                        </span>
                        Peminjaman Saya
                    </a>
                </li>
                <li class="header">
                    Lainnya
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pengaturan">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        Pengaturan
                    </a>
                </li>
            <?php else : ?>
                <!-- Jika level tidak sama dengan 0, tampilkan semua menu -->
                <li class="header">
                    Data Master
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/jurusan">
                        <span class="material-symbols-outlined">
                            apartment
                        </span>
                        Data Jurusan
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/ruangan">
                        <span class="material-symbols-outlined">
                            domain
                        </span>
                        Data Ruangan
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/mahasiswa">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        Data Pengguna
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/peminjaman">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        Data Peminjaman
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/laporan">
                        <span class="material-symbols-outlined">
                            lab_profile
                        </span>
                        Laporan
                    </a>
                </li>
                <li class="header">
                    Peminjaman
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pinjam" class="nav-link active">
                        <span class="material-symbols-outlined">
                            event_available
                        </span>
                        Pinjam Ruangan
                    </a>
                </li>
                <li>
                    <a href="<?= BASEURL ?>/pinjam/peminjaman_saya">
                        <span class="material-symbols-outlined">
                            user_attributes
                        </span>
                        Peminjaman Saya
                    </a>
                </li>
                <li class="header">
                    Lainnya
                </li>
                <li>
                    <a href="<?= BASEURL; ?>/pengaturan">
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                        Pengaturan
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">