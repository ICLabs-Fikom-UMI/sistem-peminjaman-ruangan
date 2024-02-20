<div class="form-container-1 mb-4">

    <div class="row">
        <div class="col-md-9">
            <h5>Ubah Email</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="" class="form-label">Email Baru</label>
                    <input type="email" class="form-control">
                    <div class="form-text small font-weight-medium">
                        Email akan berubah ketika Anda
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary font-weight-bold">Ubah Email</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="form-container-1 ">
    <div class="row">
        <div class="col-md-9">
            <h5>Ubah Password</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="" class="form-label">Email Baru</label>
                    <input type="email" class="form-control">
                    <div class="form-text small font-weight-medium">
                        Email akan berubah ketika Anda
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary font-weight-bold">Ubah Email</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="form-container-1 mt-3 ">
    <div class="row">
        <div class="col-9">
            <h5>Detail Profil</h5>
            <div class="row">
                <div class="col d-flex">
                    <div>
                        <img src="<?= BASEURL ?>/img/robot.jpg" alt="" width="100">
                    </div>
                    <div class="form-gourp">
                        <button class="btn btn-primary">Unggah foto baru</button>
                        <button class="btn btn-secondary">Reset</button>
                        <p>Gambar Profile Anda sebaiknya memiliki rasio 1:1
                            dan berukuran tidak lebih dari 2MB.</p>
                    </div>
                </div>
            </div>
            <div class="horizontal-line"></div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data['dataUser']['nama_lengkap'] ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $data['dataUser']['email'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="<?= $data['dataUser']['nim'] ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="no_telp" class="form-label">No.Telepon</label>
                        <input type="tel" class="form-control" id="no_telp" name="no_telp" value="<?= $data['dataUser']['no_telp'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama_jurusan" class="form-label">Jurusan</label>
                        <select id="nama_jurusan" class="form-control" name="id_jurusan">
                            <option value="#">-- Pilih Jurusan --</option>
                            <?php foreach ($data['dataJurusan'] as $jurusan) : ?>
                                <option value="<?= $jurusan['id_jurusan']; ?>" <?php if ($data['dataUser']['id_jurusan'] == $jurusan['id_jurusan']) echo 'selected="selected"'; ?>>
                                    <?= $jurusan['nama_jurusan']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary font-weight-bold me-2">Simpan Perubahan</button>
                    <button class="btn btn-secondary font-weight-bold">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>