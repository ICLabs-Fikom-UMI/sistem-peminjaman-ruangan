    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- Data user -->
    <div class="container-user rounded mb-5">
        <div class="row">
            <form action="<?= BASEURL; ?>/laporan" method="post" id="filterForm">
                <div class="row align-items-end">
                    <div class="col-md-4 mb-3">
                        <label for="tanggalAwal" class="form-label">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="tanggalAkhir" class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir">
                    </div>

                    <div class="col-md-4 mb-3">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <button type="button" onclick="resetFilter()" class="btn btn-danger">Reset</button>
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
            <table id="example" class="table" style="width:100%">
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
                    foreach ($data['dikembalikan'] as $pj) :
                        $no++;
                    ?>
                        <td><?= $no; ?></td>
                        <td><?= $pj['nama_lengkap']; ?></td>
                        <td><?= $pj['nama_ruangan']; ?></td>
                        <td><?= $pj['tanggal_pinjam']; ?></td>
                        <td><?= $pj['waktu_mulai']; ?></td>
                        <td><?= $pj['waktu_selesai']; ?></td>
                        <td><?= $pj['keperluan']; ?></td>
                        <td>
                            <div class="status-background <?= strtolower($pj['status_peminjaman']); ?>">
                                <?= $pj['status_peminjaman'] ?>
                            </div>
                        </td>
                        <td class=" text-center">-
                        </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- End Data user -->

    <script>
        function resetFilter() {
            // Mengosongkan nilai input tanggal
            document.getElementById('tanggalAwal').value = '';
            document.getElementById('tanggalAkhir').value = '';

            // Submit form
            document.getElementById('filterForm').submit();
        }

    </script>