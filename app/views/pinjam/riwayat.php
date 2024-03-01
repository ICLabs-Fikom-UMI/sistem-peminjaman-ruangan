<div class="form-container-1 ">
    <?php foreach ($data['riwayat'] as $riwayat) : ?>
        <?php if ($riwayat['status_peminjaman'] == 'Disetujui') : ?>
            <div class="riwayat mb-3" style="background-color: #0f0">
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <div>
                            <h6>Peminjaman <?= $riwayat["status_peminjaman"]?></h6>
                            <p class="m-0">Peminjaman Anda telah disetujui oleh pihak SIPERU</p>
                        </div>
                        <span><?= $riwayat['tanggal_pinjam'] ?></span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col d-flex">
                        <img src="<?= BASEURL ?>/img/thumbnail/<?= $riwayat['thumbnail'] ?>" class="rounded" alt="thumbnail" width="40" height="40">
                        <div class="ms-2">
                            <h6 class="m-0"><?= $riwayat['nama_ruangan'] ?></h6>
                            <p><?= $riwayat['lokasi'] ?>| <?= $riwayat['kapasitas'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach; ?>
</div>