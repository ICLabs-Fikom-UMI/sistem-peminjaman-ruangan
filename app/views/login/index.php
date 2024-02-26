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

                    <span>Pengguna baru? <a href=" <?= BASEURL; ?>/daftar" class="signup text-decoration-none"> Daftar sekarang</a></span>
                </form>
            </div>
        </div>
    </div>
</body>

</html>