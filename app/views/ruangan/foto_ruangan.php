<div class="form-container-1 ">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between">
            <div class="d-flex justify-content-start">
                <div>
                    <img src="<?= BASEURL ?>/img/<?= $data['ruangan']['thumbnail'] ?>" alt="" class="me-3" sytle="width:100%">
                </div>
                <div>
                    <h5><?= $data['ruangan']['nama_ruangan'] ?></h5>
                </div>
            </div>
            <div>
                <a href="" class="btn btn-primary">Lihat Ruangan</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="dropzone">
                        <input type="file">
                        <div class="dropzone-text">Jatuhkan file disini atau klik untuk mengunggah</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>