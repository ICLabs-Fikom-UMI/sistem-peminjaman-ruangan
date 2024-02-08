<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- my fontawesome -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/fontawesome/css/all.css">

    <!-- Icon Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-5 mt-5 mb-5 p-3">
                <form action="<?= BASEURL ?>/daftar/daftar" method="post" class="custome-form">
                    <div class="header">
                        <h2 class="text-center mb-4">SIPIRA</h2>
                        <h4>Daftar Akun</h4>
                        <p>Buat peminjaman mu mudah dan menyenangkan!</p>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="nim" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nim" class="form-label">NIM:</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_telp" class="form-label">No Handphone:</label>
                        <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Kata Sandi:</label>
                        <div class=" input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi:</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                        </div>
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

</body>

</html>