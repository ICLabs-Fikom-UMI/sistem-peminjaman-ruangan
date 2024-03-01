<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>

    <!-- export datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.1/b-3.0.0/b-html5-3.0.0/b-print-3.0.0/datatables.min.css">



    <style>
        .data_table {
            background: #fff;
            padding: 15px;
            box-shadow: 1px 3px 5px #aaa;
            border-radius: 5px;
        }

        .data_table .btn {
            padding: 5px 10px;
            margin: 10px 3px 10px 0;
            background-color: #00f;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table table-striped table-bordered">
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
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- export datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.1/b-3.0.0/b-html5-3.0.0/b-print-3.0.0/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            new DataTable('#example', {
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
        });
    </script>
</body>

</html>