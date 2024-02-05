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