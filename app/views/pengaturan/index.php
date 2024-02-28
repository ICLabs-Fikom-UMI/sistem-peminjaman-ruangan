    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="form-container-1 mb-4">
        <div class="row">
            <div class="col-9">
                <h5>Detail Profil</h5>
                <hr>
                <form action="<?= BASEURL ?>/pengaturan/ubahprofile" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <img src="<?= BASEURL; ?>/img/profile/<?= $data['dataUser']['image']; ?>" alt=" foto profile" class="img-fluid rounded" style="width: 100px; height:100px; object-fit: cover;">
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="file" id="image" name="image" style="display: none;">
                                <label for="image" class="btn btn-primary">Pilih Foto</label>
                                <button class="btn btn-secondary">Reset</button>
                                <p class="mt-2">Gambar Profile Anda sebaiknya memiliki rasio 1:1 <br>
                                    dan berukuran tidak lebih dari 2MB.</p>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-md-6 mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['dataUser']['alamat'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary font-weight-bold me-2">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="form-container-1 mb-4">

        <div class="row">
            <div class="col-md-4">
                <h5>Ubah Email</h5>
                <form action="<?= BASEURL ?>/pengaturan/ubahemail" method="post">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Baru</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com">
                        <div class="form-text small font-weight-medium">
                            Email akan berubah ketika Anda
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary font-weight-bold">Ubah Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="form-container-1 ">
        <div class="row">
            <div class="col-md-4">
                <h5>Ubah Kata Sandi</h5>
                <form action="<?= BASEURL ?>/pengaturan/ubahpassword" method="post">
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi baru" required>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <span class="p-0 input-group-text" style="cursor:pointer; background-color: transparent; border: none;">
                                    <i class="fas fa-eye" id="togglePassword1" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi Baru</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="confirm_password" placeholder="Konfirmasi kata sandi" name="confirm_password" required>
                            <div class="position-absolute top-50 end-0 translate-middle">
                                <span class="p-0 input-group-text" style="cursor:pointer; background-color: transparent; border: none;">
                                    <i class="fas fa-eye" id="togglePassword2" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type='submit' class="btn btn-primary font-weight-bold">Simpan Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePassword1 = document.getElementById('togglePassword1');
        const password = document.getElementById('password');

        togglePassword1.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle icon
            togglePassword1.classList.toggle('fa-eye');
            togglePassword1.classList.toggle('fa-eye-slash');
        });

        const togglePassword2 = document.getElementById('togglePassword2');
        const confirm_password = document.getElementById('confirm_password');

        togglePassword2.addEventListener('click', function() {
            const type = confirm_password.getAttribute('type') === 'password' ? 'text' : 'password';
            confirm_password.setAttribute('type', type);

            // Toggle icon
            togglePassword2.classList.toggle('fa-eye');
            togglePassword2.classList.toggle('fa-eye-slash');
        });
    </script>