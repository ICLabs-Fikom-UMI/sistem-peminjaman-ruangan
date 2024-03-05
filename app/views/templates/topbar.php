<?php
// Ambil URL saat ini
$currentURL = $_SERVER['REQUEST_URI'];

// Periksa apakah URL saat ini mengandung "/pinjam"
$isPinjamPage = strpos($currentURL, '/pinjam') !== false;
?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light rounded bg-white topbar px-4 mb-4 static-top shadow <?php echo $isPinjamPage ? 'justify-content-between' : 'justify-content-end'; ?>">

    <?php if ($isPinjamPage) : ?>
        <!-- Topbar Search -->
        <form action="<?= BASEURL ?>/pinjam/cari" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Ruangan.." name="keyword" id="keyword" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    <?php endif; ?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto d-flex align-items-center">
        <!-- Avatar -->
        <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                <img src="<?= BASEURL; ?>/img/profile/<?= $_SESSION['image'] ?>" alt=" foto profile" class="rounded-circle" style="width: 35px; height:35px; object-fit: cover;">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?= BASEURL; ?>/pengaturan"><i class="bi bi-gear"></i> Pengaturan</a>
                </li>
                <div class="divider dropdown-divider"></div>
                <li>
                    <a class="dropdown-item" href=" <?= BASEURL; ?>/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                </li>
            </ul>
        </div>


        <div class="notifikasi ms-3">
            <i class="fa-regular fa-bell" style="font-size: 24px;"></i>
        </div>
    </ul>
</nav>
<!-- End of Topbar -->