<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-5 mt-5 mb-5 p-3">
            <form action="<?= BASEURL; ?>/Login/login" method="post" class="custome-form">
                <div class="header">
                    <h2 class="text-center mb-4">SIPIRA</h2>
                    <h4>Selamat Datang</h4>
                    <p>Silahkan masuk ke akun anda</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda" name="password" required>
                </div>
                <div class="form-group mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                </div>
                <button type="submit" class="signin mb-3">Masuk</button>

                <span>Pengguna baru? <a href=" <?= BASEURL; ?>/daftar" class="signup text-decoration-none">Daftar sekarang</a></span>

                <p class="text-center">Login dengan:</p>
                <div class="text-center">
                    <div class="icon-box" style="background-color: #DFE9FF; width: 50px; height: 50px; display: inline-block; margin-right: 10px; border-radius: 8px;">
                        <i class="fab fa-facebook-f" style="color: #3B5998; font-size: 24px; line-height: 50px;"></i>
                    </div>
                    <div class="icon-box" style="background-color: #FFDEDB; width: 50px; height: 50px; display: inline-block; border-radius: 8px;">
                        <i class="fab fa-google" style="color: #DB4437; font-size: 24px; line-height: 50px;"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>