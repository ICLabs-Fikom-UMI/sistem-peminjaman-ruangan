        <div class="container-user rounded">
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="<?= BASEURL; ?>/img/<?= $data['ruangan']['thumbnail'] ?>" alt="Thumbnail" class="img-fluid rounded" style="width:100%; height:230px; object-fit:cover">
                </div>

                <div class="col-8">
                    <h5><?= $data['ruangan']['nama_ruangan'] ?></h5>

                    <div class="d-flex">
                        <p class="text-success me-3"><?= $data['ruangan']['status_ruangan'] ?></p>
                        <p class="text-muted me-3"><?= $data['ruangan']['lokasi'] ?></p>
                        <p class="text-info"><?= $data['ruangan']['kapasitas'] ?> Orang</p>
                    </div>

                    <p>Koordinator Ruangan: <span><?= $data['ruangan']['id_user']?></span></p>

                    <p><?= $data['ruangan']['deskripsi'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6>Foto Ruangan</h6>
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