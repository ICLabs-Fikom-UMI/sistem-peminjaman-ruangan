    <section class="login">
        <div class="row">
            <div class="col-4 mx-auto bg-white rounded">
                <div class="header">
                    <h1>Selamat Datang</h1>
                    <p>Silahkan masuk ke akun anda</p>
                </div>
                <div class="login-form">
                    <form action="<?= BASEURL; ?>/Login/login" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                        </div>
                        <button type="submit" class="signin mb-3">Masuk</button>

                        <span>Pengguna baru? <a href="#" class="signup text-decoration-none">Daftar sekarang</a></span>
                    </form>
                </div>
            </div>
        </div>
    </section>