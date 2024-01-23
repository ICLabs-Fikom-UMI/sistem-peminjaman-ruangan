    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">
                <img src="..\public\img\robot.jpg" alt="brand-identity" height="35" loading="lazy">
                IClabs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/about">Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/laporan">Laporan</a>
                    </li>
                </ul>

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                        <img src="..\public\img\profile.png" class="rounded-circle" height="35" alt="foto profile" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="#"><i class="fa-regular fa-user"></i> My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Pengaturan</a>
                        </li>
                        <div class="divider dropdown-divider"></div>
                        <li>
                            <a class="dropdown-item" href=" <?= BASEURL; ?>/login"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>