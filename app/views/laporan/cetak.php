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

    <!-- my Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title><?= $data['judul'] ?></title>
</head>

<body onload='window.print()'>
    <h3 class="mb-3">Laporan Data Peminjaman</h3>
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr style="vertical-align: middle;">
                <th>No</th>
                <th>Peminjam</th>
                <th>Ruangan</th>
                <th>Tanggal <br>Peminjaman</th>
                <th>Waktu <br>Mulai</th>
                <th>Waktu <br>Selesai</th>
                <th>Keperluan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($data['dikembalikan'] as $pj) :
                $no++;
            ?>
                <td><?= $no; ?></td>
                <td><?= $pj['nama_lengkap']; ?></td>
                <td><?= $pj['nama_ruangan']; ?></td>
                <td><?= $pj['tanggal_pinjam']; ?></td>
                <td><?= $pj['waktu_mulai']; ?></td>
                <td><?= $pj['waktu_selesai']; ?></td>
                <td><?= $pj['keperluan']; ?></td>
                <td>
                    <?= $pj['status_peminjaman'] ?>
                </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>