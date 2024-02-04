<div class="row mb-3">
    <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card">
            <img src="..\public\img\multimedia.jpg" class="card-img-top" alt="multimedia">
            <div class="card-body">
                <h5 class="card-title mb-3">Lab Multimedia</h5>
                <div class="card-info d-flex justify-content-between mb-3">
                    <div class="info-item">
                        <p>Tersedia</p>
                    </div>
                    <div class="info-item">
                        <p>Lantai 3</p>
                    </div>
                    <div class="info-item">
                        <p>24 Orang</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="#" class="btn-custom btn btn-primary " style="width: 142px; font-size: 14px;">Pinjam Sekarang</a>
                    <a href="<?= BASEURL; ?>/ruangan/detail" class="btn-custom btn btn-secondary  " style="width: 70px; font-size: 14px;">Detail</a>
                </div>
                <p><i class="fa-regular fa-calendar-check"></i> 0x dipinjam</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card">
            <img src="..\public\img\multimedia.jpg" class="card-img-top" alt="multimedia">
            <div class="card-body">
                <h5 class="card-title mb-3">Lab Multimedia</h5>
                <div class="card-info d-flex justify-content-between mb-3">
                    <div class="info-item">
                        <p>Tersedia</p>
                    </div>
                    <div class="info-item">
                        <p>Lantai 2</p>
                    </div>
                    <div class="info-item">
                        <p>24 Orang</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="#" class=" btn btn-primary ">Pinjam Sekarang</a>
                    <a href="#" class="btn btn-secondary">Detail</a>
                </div>
                <p><i class="fa-regular fa-calendar-check"></i> 0x dipinjam</p>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-3 mb-3 mb-sm-0">
        <div class="card">
            <img src="..\public\img\multimedia.jpg" class="card-img-top" alt="multimedia">
            <div class="card-body">
                <h5 class="card-title mb-3">Lab Multimedia</h5>
                <div class="card-info d-flex justify-content-between mb-3">
                    <div class="info-item">
                        <p>Tersedia</p>
                    </div>
                    <div class="info-item">
                        <p>Lantai 2</p>
                    </div>
                    <div class="info-item">
                        <p>24 Orang</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="#" class="btn-custom btn btn-primary " style="width: 142px; font-size: 14px;">Pinjam Sekarang</a>
                    <a href="#" class="btn-custom btn btn-secondary  " style="width: 70px; font-size: 14px;">Detail</a>
                </div>
                <p><i class="fa-regular fa-calendar-check"></i> 0x dipinjam</p>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-8">
        <div class="form-container-1">
            <div class="lab-name">Nama Lab</div>
            <div class="data-info">Data Peminjaman</div>
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="tanggalPinjam" class="form-label">Tanggal Pinjam:</label>
                        <input type="date" class="form-control" id="tanggalPinjam" name="tanggalPinjam" required>
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        <label for="waktuMulai" class="form-label">Waktu Mulai:</label>
                        <input type="time" class="form-control" id="waktuMulai" name="waktuMulai" required>
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        <label for="waktuSelesai" class="form-label">Waktu Selesai:</label>
                        <input type="time" class="form-control" id="waktuSelesai" name="waktuSelesai" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="acaraKegiatan" class="form-label">Acara/Kegiatan</label>
                        <input type="text" class="form-control" id="acaraKegiatan" placeholder="Masukkan nama acara/kegiatan">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="acaraKegiatan" class="form-label">Acara/Kegiatan</label>
                        <input type="text" class="form-control" id="acaraKegiatan" placeholder="Masukkan nama acara/kegiatan">
                    </div>
                </div>
                <!-- Tambahkan input tanggal, waktu mulai, waktu selesai -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-2">Submit</button>
                    <button type="button" class="btn btn-secondary mx-2">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-4">
        <div class="form-container-1">
            <div class="ruangan-name">Nama Ruangan</div>
            <div class="ruangan-info">Info Ruangan</div>

            <img src="thumbnail_url" alt="Thumbnail Ruangan" class="thumbnail">

            <div class="ruangan-info">
                <p>Lantai: 2</p>
                <p>Kapasitas: 30 orang</p>
            </div>

            <div class="ruangan-info">
                <p>Deskripsi Ruangan:</p>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-user rounded mb-5">
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                <span class="material-symbols-outlined">
                    pace
                </span>
                Lihat Riwayat
            </button>
        </div>
    </div>

    <div class="horizontal-line"></div>

    <div class="card-body mt-3">
        <table id="example" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Ruangan</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Waktu Mulai</th>
                    <th>Waktu Selesai</th>
                    <th>Sisa Waktu</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($data['mp'] as $profile) :
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td>Multimedia</td>
                        <td>03/02/2024</td>
                        <td>15.00</td>
                        <td>17.00</td>
                        <td>0:24:14</td>
                        <td>Weekly Learning</td>
                        <td>Disetujui</td>
                        <td class="icon-container" style="text-align: center;">
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>