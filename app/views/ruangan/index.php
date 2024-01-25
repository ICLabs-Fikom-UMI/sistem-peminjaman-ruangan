<div class="container mt-3">

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
            <form class="container-user">
                <!-- Baris 1: Nama Ruangan -->
                <div class="form-group">
                    <label for="namaRuangan">Nama Ruangan</label>
                    <input type="text" class="form-control" id="namaRuangan" placeholder="Masukkan Nama Ruangan" required>
                </div>

                <!-- Baris 2: Kapasitas dan Lokasi -->
                <div class="form-row">
                    <div class="form-group col">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas" required>
                    </div>
                    <div class="form-group col">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi" required>
                    </div>
                </div>

                <!-- Baris 3: Deskripsi -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-primary">Submit</button>
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