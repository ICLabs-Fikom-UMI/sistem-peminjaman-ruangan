                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light rounded bg-white topbar px-4 mb-4 static-top shadow justify-content-between">

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                    </ul>
                </nav>
                <!-- End of Topbar -->