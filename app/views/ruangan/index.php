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
    <div class="col-md-4">
        <!-- Formulir Bootstrap dengan gaya khusus -->
        <div class="container form-container">
            <form>
                <!-- Baris 1 -->
                <div class="form-group mb-3">
                    <label for="namaRuangan" class="form-label">Nama Ruangan</label>
                    <input type="text" class="form-control" id="namaRuangan" placeholder="Masukkan Nama Ruangan">
                </div>

                <!-- Baris 2 -->
                <div class="form-row d-flex justify-content-between w-100">
                    <div class="form-group mb-3 col-md-6">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="text" class="form-control" id="kapasitas" placeholder="Kapasitas">
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi">
                    </div>
                </div>

                <!-- Baris 3 -->
                <div class="form-group mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                </div>

                <!-- Baris 4 -->
                <div class="form-group mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <div class="thumbnail-container">
                        <div class="upload-btn-wrapper">
                            <button class="btn btn-secondary btn-custome">Upload File</button>
                            <input type="file" name="thumbnail" id="thumbnail" accept="image/*" onchange="previewImage(this)">
                        </div>
                        <img src="" alt="Thumbnail Preview" class="thumbnail-preview" onload="adjustThumbnailContainerSize()">
                    </div>
                </div>

                <!-- Baris 5 -->
                <div class="buttons-container">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger" style="margin-left: 5px;">Reset</button>
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
                            <td><img src="..\public\img\multimedia.jpg" alt="" width="50"></td>
                            <td><?= $ruangan['nama_ruangan']; ?></td>
                            <td><?= $ruangan['kapasitas']; ?></td>
                            <td><?= $ruangan['lokasi']; ?></td>
                            <td>Tersedia</td>
                            <td class="icon-container d-flex" >
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $ruangan['id_ruangan']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $ruangan['id_ruangan']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $ruangan['id_ruangan']; ?>"><i class=" fa-solid fa-ellipsis-vertical"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Card Data Ruangan-->