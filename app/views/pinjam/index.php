    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <?php
        foreach ($data['ruangan'] as $ruangan) : ?>
            <div class="col-md-3 mb-4 ">
                <div class="card">
                    <img src="<?= BASEURL; ?>/img/thumbnail/<?= $ruangan['thumbnail']; ?>" class="card-img-top" style="width:100%; height:150px; object-fit: cover" alt="multimedia">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><?= $ruangan['nama_ruangan'] ?></h5>
                        <div class="card-info d-flex justify-content-between mb-3">
                            <div class="info-item">
                                <p><?= $ruangan['status_ruangan'] ?></p>
                            </div>
                            <div class="info-item">
                                <p><?= $ruangan['lokasi'] ?></p>
                            </div>
                            <div class="info-item">
                                <p><?= $ruangan['kapasitas'] ?> Orang</p>
                            </div>
                        </div>
                        <div class="card-body p-0 d-flex justify-content-between mb-3 ">
                            <a href="<?= BASEURL; ?>/ruangan/pinjam_ruangan/<?= $ruangan['id_ruangan'] ?>" class=" btn btn-primary me-3">Pinjam Sekarang</a>
                            <a href="<?= BASEURL; ?>/ruangan/detail/<?= $ruangan['id_ruangan'] ?>" class="btn btn-secondary">Detail</a>
                        </div>
                        <p><i class="fa-regular fa-calendar-check"></i> <?= $ruangan['countReservation']?>x dipinjam</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>