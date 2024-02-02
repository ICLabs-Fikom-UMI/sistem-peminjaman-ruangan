        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>

        <script src="..\public\js\flash.js"></script>

        <!-- Card Data Ruangan-->
        <div class="row mb-4">
            <div class="col-md-4 col-xl-4">
                <div class="card">
                    <div class="card-block d-flex justify-content-between">
                        <div>
                            <h6>Total Ruangan</h6>
                            <h2><span><?php echo $data['jumlahTotalRuangan'];  ?></span></h2>
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
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <!-- Formulir Bootstrap dengan gaya khusus -->
                <div class="container form-container">
                    <form action="<?= BASEURL; ?>/ruangan/tambah" method="post" enctype="multipart/form-data">
                        <!-- Baris 1 -->
                        <div class="form-group mb-3">
                            <label for="namaRuangan" class="form-label">Nama Ruangan</label>
                            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Masukkan Nama Ruangan">
                        </div>

                        <!-- Baris 2 -->
                        <div class="form-row d-flex justify-content-between w-100">
                            <div class="form-group mb-3 col-md-6">
                                <label for="kapasitas" class="form-label">Kapasitas</label>
                                <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas">
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                            </div>
                        </div>

                        <!-- Baris 3 -->
                        <div class="form-group mb-3">
                            <label for="korlab" class="form-label">Koordinator Lab</label>
                            <select id="korlab" class="form-control" name="id_user">
                                <option value="#">-- Pilih Koordinator Lab --</option>
                                <?php foreach ($data['korlab'] as $user) : ?>
                                    <option value="<?= $user['id_user']; ?>"><?= $user['nama_lengkap']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Baris 4 -->
                        <div class="form-group mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="7" placeholder="Masukkan Deskripsi"></textarea>
                        </div>

                        <!-- Baris 5 -->
                        <div class="form-group mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <div class="custom-upload-btn">
                                <input type="file" id="gambar" name="gambar" accept="image/*" onchange="previewImage()">
                                <label for="gambar">Upload File</label>
                            </div>
                        </div>

                        <!-- Pratinjau Gamba Baris 6 -->
                        <div class="preview-container">
                            <img src="#" id="preview" alt="Pratinjau Gambar" style="display: none;">
                        </div>

                        <!-- Baris 7 -->
                        <div class="buttons-container">
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            <button type="reset" class="btn btn-danger mt-3" style="margin-left: 5px;">Reset</button>
                        </div>
                    </form>
                </div>
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
                            foreach ($data['ruangan'] as $ruangan) :
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><img src="img/<?= $ruangan['thumbnail']; ?>" alt="" width="100%"></td>
                                    <td><?= $ruangan['nama_ruangan']; ?></td>
                                    <td><?= $ruangan['kapasitas']; ?></td>
                                    <td><?= $ruangan['lokasi']; ?></td>
                                    <td><?= $ruangan['status_ruangan']; ?></td>
                                    <td class="icon-container text-center">
                                        <a href="<?= BASEURL; ?>/ruangan/ubah/<?= $ruangan['id_ruangan']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                        <a href="<?= BASEURL; ?>/ruangan/hapus/<?= $ruangan['id_ruangan']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                        <a href="<?= BASEURL; ?>/ruangan/detail/<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-ellipsis-vertical"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Ruangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>/ruangan/tambah" method="post">
                            <input type="hidden" name="id_user" id="id_user">

                            <div class="row">
                                <div class="col-md-6 mb-3">Nama</label>
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
                                            <option value="<?= $jurusan['id_jurusan']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
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
        <!-- End Card Data Ruangan-->

        <!-- JavaScript untuk pratinjau gambar -->
        <script>
            function previewImage() {
                var input = document.getElementById('gambar');
                var preview = document.getElementById('preview');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>