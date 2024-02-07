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
        <table class="table " style="width:100%">
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
                foreach ($data['peminjaman'] as $pinjam) :
                    $no++;
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $pinjam['nama_ruangan'] ?></td>
                        <td><?= $pinjam['tanggal_pinjam'] ?></td>
                        <td><?= $pinjam['waktu_mulai'] ?></td>
                        <td><?= $pinjam['waktu_selesai'] ?></td>
                        <td>-</td>
                        <td><?= $pinjam['keperluan'] ?></td>
                        <td><?= $pinjam['status_peminjaman'] ?></td>
                        <td class="icon-container" style="text-align: center;">
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-danger">Batalkan</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>