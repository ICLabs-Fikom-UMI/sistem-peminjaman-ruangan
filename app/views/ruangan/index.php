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

            <div class="card-body mt-3">
                <table id="example" class="table table-bordered table-striped" style="width:100%">
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
                                <td style="width:100px;"><img src="img/<?= $ruangan['thumbnail']; ?>" alt="" style="max-width:100%; object-fit:cover;"></td>
                                <td><?= $ruangan['nama_ruangan']; ?></td>
                                <td><?= $ruangan['kapasitas']; ?></td>
                                <td><?= $ruangan['lokasi']; ?></td>
                                <td><?= $ruangan['nama_lengkap']; ?></td>
                                <td><?= $ruangan['status_ruangan']; ?></td>
                                <td class="icon-container text-center">
                                    <a href="<?= BASEURL; ?>/ruangan/ubah/<?= $ruangan['id_ruangan']; ?>" class="tampilEditRuangan" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-pen-to-square "></i></a>
                                    <a href="<?= BASEURL; ?>/ruangan/hapus/<?= $ruangan['id_ruangan']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                    <a href="<?= BASEURL; ?>/ruangan/detail/<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-ellipsis-vertical"></i></a>
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
                                        <label for="namaRuangan" class="form-label">Nama Ruangan</label>
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

                                </div>
                                <div class="col-6">
                                    <div class="form-group mb-3">
                                        <label for="korlab" class="form-label">Koordinator Lab</label>
                                        <select id="korlab" class="form-control" name="id_user">
                                            <option value="#">-- Pilih Koordinator Lab --</option>
                                            <?php foreach ($data['korlab'] as $user) : ?>
                                                <option value="<?= $user['id_user']; ?>"><?= $user['nama_lengkap']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="thumbnail" class="form-label">Thumbnail</label>
                                        <div class="custom-upload-btn">
                                            <input type="file" id="thumbnail" name="thumbnail">
                                            <label for="gambar">Upload File</label>
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

        <div class="container-user rounded">
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="<?= BASEURL; ?>/img/multimedia.jpg" alt="Thumbnail" class="img-fluid rounded" style="max-width:100%; object-fit:cover">
                </div>

                <div class="col-8">
                    <h5>Computer Vision</h5>

                    <div class="d-flex">
                        <p class="text-success me-3">Tersedia</p>
                        <p class="text-muted me-3">Lantai 2</p>
                        <p class="text-info">24 Orang</p>
                    </div>

                    <p>Koordinator Ruangan: <span>Furqon</span></p>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, saepe soluta quae deserunt facilis dolorum iste excepturi sed unde laboriosam esse, rem cumque tenetur vero obcaecati totam natus delectus beatae. Maiores laudantium modi aperiam quo eum, quod quam officia ratione expedita esse tempora saepe ipsa iusto quis, numquam aliquam consectetur?</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h5>Foto Ruangan</h5>
                    <hr>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= BASEURL; ?>/img/multimedia.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= BASEURL; ?>/img/65bb967b88fa6.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>