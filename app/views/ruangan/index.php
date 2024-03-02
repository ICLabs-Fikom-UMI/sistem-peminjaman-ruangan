        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>

        <script src="..\public\js\flash.js"></script>

        <!-- Card Data Ruangan-->
        <div class="row">
            <div class="col-md-4 col-xl-4 mb-4">
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
            <div class="col-md-4 col-xl-4 mb-4">
                <div class="card">
                    <div class="card-block d-flex justify-content-between">
                        <div>
                            <h6>Tersedia</h6>
                            <h2><span><?php echo $data['ruanganTersedia']; ?></span></h2>
                            <p>Ruangan yang tersedia</p>
                        </div>
                        <div>
                            <img src="..\public\img\disetujui.svg" alt="Koordinator Lab">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 mb-4">
                <div class="card">
                    <div class="card-block d-flex justify-content-between">
                        <div>
                            <h6>Tidak Tersedia</h6>
                            <h2><span><?php echo $data['ruanganTidakTersedia']; ?></span></h2>
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
        <div class="container-user rounded mb-4">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary tombolTambahRuangan" data-bs-toggle="modal" data-bs-target="#formModal">
                        <i class="fa-solid fa-plus"></i>
                        Tambah Ruangan
                    </button>
                </div>
            </div>

            <div class="horizontal-line"></div>

            <div class="card-body mt-3 table-responsive">
                <table id="example" class="table " style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Thumbnail</th>
                            <th>Nama Ruangan</th>
                            <th>Kapasitas</th>
                            <th>Lokasi</th>
                            <th>Koordinator Lab</th>
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
                                <td style="width:100px;"><img src="img/thumbnail/<?= $ruangan['thumbnail']; ?>" alt="thumbnail" style="max-width:100%; object-fit:cover;"></td>
                                <td><?= $ruangan['nama_ruangan']; ?></td>
                                <td><?= $ruangan['kapasitas']; ?></td>
                                <td><?= $ruangan['lokasi']; ?></td>
                                <td><?= $ruangan['nama_lengkap']; ?></td>
                                <td><?= $ruangan['status_ruangan']; ?></td>
                                <td class="icon-container text-center">
                                    <a href="<?= BASEURL; ?>/ruangan/ubah/<?= $ruangan['id_ruangan']; ?>" class="tampilEditRuangan" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= BASEURL; ?>/ruangan/hapus/<?= $ruangan['id_ruangan']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can" style="color: #ff0000;"></i></a>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                                            <i class=" fa-solid fa-ellipsis-vertical" style="color: #000000;"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                            <li>
                                                <a class="dropdown-item" href="<?= BASEURL; ?>/ruangan/detail/<?= $ruangan['id_ruangan']; ?>">Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="<?= BASEURL; ?>/ruangan/foto_ruangan/<?= $ruangan['id_ruangan']; ?>">Tambah foto slider</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- modal ubah Data ruangan -->

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Ruangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>/ruangan/tambah" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_ruangan" id="id_ruangan">

                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group mb-3">
                                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                                        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Masukkan Nama Ruangan">
                                    </div>

                                    <div class="row">
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="kapasitas" class="form-label">Kapasitas</label>
                                            <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas">
                                        </div>
                                        <div class="form-group mb-3 col-md-6">
                                            <label for="lokasi" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="korlab" class="form-label">Koordinator Lab</label>
                                        <select id="korlab" class="form-control" name="id_user">
                                            <option value="#">-- Pilih Koordinator Lab --</option>
                                            <?php foreach ($data['korlab'] as $user) : ?>
                                                <option value="<?= $user['id_user']; ?>"><?= $user['nama_lengkap']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <!-- <div class="form-group mb-3">
                                        <label for="korlab" class="form-label">Koordinator Lab</label>
                                        <select id="korlab" class="form-control" name="id_user">
                                            <option value="#">-- Pilih Koordinator Lab --</option>
                                            <?php foreach ($data['korlab'] as $user) : ?>
                                                <option value="<?= $user['id_user']; ?>"><?= $user['nama_lengkap']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div> -->

                                    <div class="form-group mb-3">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <div class="preview rounded">
                                            <img src="<?= BASEURL ?>/img/thumbnail/default_image.png" id="img" alt="Preview Thumbnail" class="rounded img-fluid" style="width:100%; height: 227px; object-fit:cover">
                                            <input type="file" id="thumbnail" class="form-control d-none" name="thumbnail">
                                            <!-- <label class="upload-button" for="thumbnail">UPLOAD FILE</label> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi"></textarea>
                                    </div>
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


        <script>
            document.getElementById('img').addEventListener('click', function() {
                document.getElementById('thumbnail').click();
            });

            document.getElementById('thumbnail').addEventListener('change', function() {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        console.log("File berhasil dibaca"); // Pesan log untuk memeriksa apakah file berhasil dibaca
                        document.getElementById('img').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
        </script>