<!-- Data user -->
<div class="container-user rounded mb-5">
    <div class="row">
        <form action="<?= BASEURL; ?>/Login/login" method="post">
            <div class="row mb-3  align-items-end">
                <div class="col-md-4">
                    <label for="tanggalAwal" class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal">
                </div>
                <div class="col-md-4">
                    <label for="tanggalAkhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir">
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Bersihkan</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                <i class="fa-solid fa-file-export"></i>
                Ekspor Semua
            </button>
        </div>
    </div>

    <div class="horizontal-line"></div>

    <div class="card-body mt-3 table-responsive">
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