<div class="container mt-3">

    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

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
    <div class="row mb-3">

        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Mahasiwa</h6>
                        <h2><span>0</span></h2>
                        <p>Total mahasiswa</p>
                    </div>
                    <div>
                        <img src="..\public\img\pengguna.svg" alt="Mahasiswa">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Koordinator Lab</h6>
                        <h2><span>0</span></h2>
                        <p>Total koordinator lab</p>
                    </div>
                    <div>
                        <img src="..\public\img\admin.svg" alt="Koordinator Lab">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Admin</h6>
                        <h2><span>0</span></h2>
                        <p>Total admin</p>
                    </div>
                    <div>
                        <img src="..\public\img\admin.svg" alt="admin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Kepala Lab</h6>
                        <h2><span>0</span></h2>
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

        <div class="card-body mt-3">
            <table id="example" class="table table-bordered table-striped" style="width:100%">
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
                    foreach ($data['mhs'] as $mahasiswa) :
                        $no++;
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $mahasiswa['nama']; ?></td>
                            <td><?= $mahasiswa['email']; ?></td>
                            <td>-</td>
                            <td><?= $mahasiswa['jurusan']; ?></td>
                            <td>-</td>
                            <td class="icon-container" style="text-align: center;">
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"><i class=" fa-solid fa-ellipsis-vertical"></i></a>
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
                        <input type="hidden" name="id" id="id">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nim">NIM</label>
                                <input type="number" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="role">Role</label>
                                <input type="text" class="form-control" id="role" name="role">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password">
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

    <!-- Card peminjaman-->
    <div class="row mb-3">

        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Peminjaman</h6>
                        <h2><span>0</span></h2>
                        <p>Total Peminjaman</p>
                    </div>
                    <div>
                        <img src="..\public\img\pinjam.svg" alt="Mahasiswa">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Disetujui</h6>
                        <h2><span>0</span></h2>
                        <p>Peminjaman Disetujui</p>
                    </div>
                    <div>
                        <img src="..\public\img\disetujui.svg" alt="Koordinator Lab">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Ditolak</h6>
                        <h2><span>0</span></h2>
                        <p>Peminjaman Ditolak</p>
                    </div>
                    <div>
                        <img src="..\public\img\ditolak.svg" alt="admin">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Dibatalkan</h6>
                        <h2><span>0</span></h2>
                        <p>Peminjaman Dibatalkan</p>
                    </div>
                    <div>
                        <img src="..\public\img\dibatalkan.svg" alt="Kepala Lab">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <div class="container-user rounded mb-3">
        <table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr style="vertical-align: middle;">
                    <th>No</th>
                    <th>Peminjam</th>
                    <th>Ruangan</th>
                    <th>Tanggal <br>Peminjaman</th>
                    <th>Waktu <br>Mulai</th>
                    <th>Waktu <br>Selesai</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($data['mhs'] as $mahasiswa) :
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td>Adam Adnan</td>
                        <td>Lab Multimedia</td>
                        <td>2024-01-20</td>
                        <td>15:00</td>
                        <td>17:00</td>
                        <td>Lomba</td>
                        <td>Pending</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Setuju</button>

                            <button type="reset" class="btn btn-danger">Tolak</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Jurusan</h6>
                        <h2><span>0</span></h2>
                        <p>Total Jurusan Keseluruhan</p>
                    </div>
                    <div>
                        <img src="..\public\img\pinjam.svg" alt="Mahasiswa">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Data Jurusan-->
    <div class="row mb-3">
        <div class="col-4">
            <form action="#" method="#" class="container-user rounded">
                <div class="form-group mb-3">
                    <label for="namaJurusan" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" id="namaJurusan" placeholder="Masukkan nama jurusan" name="namaJurusan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="ketuaJurusan" class="form-label">Ketua Jurusan</label>
                    <input type="text" class="form-control" id="ketuaJurusan" placeholder="Masukkan ketua jurusan" name="ketuaJurusan" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>

        <div class="col-8">
            <div class="container-user rounded">
                <table id="example" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data['mhs'] as $mahasiswa) :
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $mahasiswa['nama']; ?></td>
                                <td><?= $mahasiswa['jurusan']; ?></td>
                                <td class="icon-container" style="text-align: center;">
                                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Card Data Jurusan-->

    <!-- Card Data Ruangan-->
    <div class="row mb-3">
        <div class="col-md-4 col-xl-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Total Ruangan</h6>
                        <h2><span>0</span></h2>
                        <p>Total ruangan keseluruhan</p>
                    </div>
                    <div>
                        <img src="..\public\img\pinjam.svg" alt="Mahasiswa">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Tersedia</h6>
                        <h2><span>0</span></h2>
                        <p>Ruangan yang tersedia</p>
                    </div>
                    <div>
                        <img src="..\public\img\disetujui.svg" alt="Koordinator Lab">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <h6>Tidak Tersedia</h6>
                        <h2><span>0</span></h2>
                        <p>Ruangan yang sedang dipinjam</p>
                    </div>
                    <div>
                        <img src="..\public\img\ditolak.svg" alt="admin">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <!-- Card Data Ruangan-->
    <div class="row mb-3">
        <div class="col-4">
            <form action="#" method="#" class="container-user rounded">
                <div class="form-group mb-3">
                    <label for="namaJurusan" class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-control" id="namaJurusan" placeholder="Masukkan nama jurusan" name="namaJurusan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="ketuaJurusan" class="form-label">Ketua Jurusan</label>
                    <input type="text" class="form-control" id="ketuaJurusan" placeholder="Masukkan ketua jurusan" name="ketuaJurusan" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>

        <div class="col-8">
            <div class="container-user rounded">
                <table id="example" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Thumbnail</th>
                            <th>Nama</th>
                            <th>Kapasitas</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data['mhs'] as $mahasiswa) :
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>thumbnail</td>
                                <td><?= $mahasiswa['nama']; ?></td>
                                <td>15 Orang</td>
                                <td>Lantai 2</td>
                                <td>Tersedia</td>
                                <td class="icon-container" style="text-align: center;">
                                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"><i class=" fa-solid fa-ellipsis-vertical"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Card Data Ruangan-->


</div>