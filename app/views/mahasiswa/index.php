    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <script src="..\public\js\flash.js"></script>

    <!-- <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>

            </form>
        </div>
    </div> -->

    <!-- <div class="row mb-3">
        <div class="col-lg-6">
            <h3>Daftar Mahasiwa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $mhs['nama']; ?>
                        <div class="button">
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary">detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div> -->

    <!-- Card -->
    <div class="row">

        <div class="col-md-4 col-xl-3 mb-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Mahasiwa</h6>
                        <h2><span><?php echo $data['jumlahUser'];  ?></span></h2>
                        <p>Total mahasiswa</p>
                    </div>
                    <div>
                        <img src="..\public\img\pengguna.svg" alt="Mahasiswa">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Koordinator Lab</h6>
                        <h2><span><span><?php echo $data['jumlahKorlab'];  ?></span></h2>
                        <p>Total koordinator lab</p>
                    </div>
                    <div>
                        <img src="..\public\img\admin.svg" alt="Koordinator Lab">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Admin</h6>
                        <h2><span><?php echo $data['jumlahAdmin'];  ?></span></h2>
                        <p>Total admin</p>
                    </div>
                    <div>
                        <img src="..\public\img\admin.svg" alt="admin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Kepala Lab</h6>
                        <h2><span><?php echo $data['jumlahKelab'];  ?></span></h2>
                        <p>Total kepala lab</p>
                    </div>
                    <div>
                        <img src="..\public\img\admin.svg" alt="Kepala Lab">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Data user -->
    <div class="container-user rounded mb-5">
        <div class="row mb-3">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Pengguna
                </button>
            </div>
        </div>

        <div class="horizontal-line"></div>

        <div class="card-body mt-3 table-responsive">
            <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pengguna</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Jurusan</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($data['user'] as $user) :
                        $no++;
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $user['nama_lengkap']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['no_telp']; ?></td>
                            <td><?= $user['nama_jurusan']; ?></td>
                            <td><?= $user['nama_role']; ?></td>
                            <td class="icon-container" style="text-align: center;">
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $user['id_user']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id_user']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $user['id_user']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can" style="color: #ff0000;"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $user['id_user']; ?>"><i class=" fa-solid fa-ellipsis-vertical" style="color: #000000;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Data user -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiwa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim">nim</label>
                            <input type="number" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="mb-3">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan">Jurusan</label>
                            <select id="jurusan" class="form-control" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Kimia">Teknik Kimia</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                            </select>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary ">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id_user" id="id_user">

                        <div class="row">
                            <div class="col d-flex">
                                <div>
                                    <img src="<?= BASEURL ?>/img/robot.jpg" alt="" width="100">
                                </div>
                                <div class="form-gourp">
                                    <button class="btn btn-primary">Unggah foto baru</button>
                                    <button class="btn btn-secondary">Reset</button>
                                    <p>Gambar Profile Anda sebaiknya memiliki rasio 1:1
                                        dan berukuran tidak lebih dari 2MB.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nim" class="form-label">Nim</label>
                                <input type="number" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="no_telp" class="form-label">No.Telepon</label>
                                <input type="tel" class="form-control" id="no_telp" name="no_telp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_jurusan" class="form-label">Jurusan</label>
                                <select id="nama_jurusan" class="form-control" name="id_jurusan">
                                    <option value="#">-- Pilih Jurusan --</option>
                                    <?php foreach ($data['dataJurusan'] as $jurusan) : ?>
                                        <option value="<?= $jurusan['id_jurusan']; ?>" ><?= $jurusan['nama_jurusan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_role" class="form-label">Role</label>
                                <select id="nama_role" class="form-control" name="id_role">
                                    <option value="#">-- Pilih Role --</option>
                                    <?php foreach ($data['dataRole'] as $role) : ?>
                                        <option value="<?= $role['id_role']; ?>"><?= $role['nama_role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                        </div>

                        <!-- Add additional fields and columns as needed -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>