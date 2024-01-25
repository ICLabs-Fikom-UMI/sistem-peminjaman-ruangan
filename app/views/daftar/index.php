<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-4 mt-5 mb-5 p-3">
            <form action="" method="" class="custome-form">
                <div class="header">
                    <h2 class="text-center mb-4">SIPIRA</h2>
                    <h4>Daftar Akun</h4>
                    <p>Buat peminjaman mu mudah dan menyenangkan!</p>
                </div>
                <div class="form-group mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="namaLengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nim" class="form-label">NIM:</label>
                    <input type="text" class="form-control" id="nim" required>
                </div>
                <div class="form-group mb-3">
                    <label for="noHP" class="form-label">No Handphone:</label>
                    <input type="text" class="form-control" id="noHP" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Kata Sandi:</label>
                    <div class=" input-group">
                        <input type="password" class="form-control" id="password" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-eye" id="togglePassword"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="konfirmasiPassword" class="form-label">Konfirmasi Kata Sandi:</label>
                    <input type="password" class="form-control" id="konfirmasiPassword" required>
                </div>

                <button type="submit" class="signin mb-3" style="background-color: #51A8B1;">Daftar</button>

                <span>Sudah memiliki akun? <a href=" <?= BASEURL; ?>/login" class="signup text-decoration-none">Kembali ke Login</a></span>

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

<!-- Toggle Password Script -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>