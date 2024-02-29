    <!-- Card -->
    <div class="row">
        <div class="col-md-4 col-xl-3 mb-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <img src="..\public\img\ruangan.svg" alt="Total ruangan" class="mb-3">
                        <h6>Total Ruangan</h6>
                        <h2><span><?php echo $data['jumlahTotalRuangan']; ?></span></h2>
                        <p>Total Ruangan yang dimiliki</p>
                    </div>
                    <div>
                        <i class=" fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <img src="..\public\img\pengguna.svg" alt="Total pengguna" class="mb-3">
                        <h6>Total Pengguna</h6>
                        <h2><span><?php echo $data['totalPengguna']; ?></span></h2>
                        <p>Total Pengguna saat ini</p>
                    </div>
                    <div>
                        <i class=" fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <img src="..\public\img\jurusan.svg" alt="Total jurusan" class="mb-3">
                        <h6>Total Jurusan</h6>
                        <h2><span><?php echo $data['jumlahJurusan'];  ?></span></h2>
                        <p>Total Jurusan saat ini</p>
                    </div>
                    <div>
                        <i class=" fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3 mb-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <img src="..\public\img\peminjaman.svg" alt="Total peminjaman" class="mb-3">
                        <h6>Total Peminjaman</h6>
                        <h2><span><?php echo $data['total_peminjaman']; ?></span></h2>
                        <p>Total peminjaman dari awal</p>
                    </div>
                    <div>
                        <i class=" fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Statistik Peminjaman</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar pt-4">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6>Pengguna Per Jurusan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const ctb = document.getElementById('myBarChart');
        const ctp = document.getElementById('myPieChart');

        new Chart(ctb, {
            type: 'bar',
            data: {
                labels: [
                    <?php foreach ($data['dataRuanganPeminjaman'] as $item) : ?> '<?= $item['nama_ruangan'] ?>',
                    <?php endforeach; ?>
                ],
                datasets: [{
                    label: 'Ruangan Yang Dipinjam',
                    data: [<?php foreach ($data['dataRuanganPeminjaman'] as $item) : ?>
                            <?= $item['jumlah_peminjaman'] ?>,
                        <?php endforeach; ?>
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(ctp, {
            type: 'pie',
            data: {
                labels: [<?php foreach ($data['dataJurusanPengguna'] as $user) : ?> '<?= $user['nama_jurusan'] ?>', <?php endforeach; ?>],
                datasets: [{
                    label: 'Pengguna',
                    data: [<?php foreach ($data['dataJurusanPengguna'] as $user) : ?><?= $user['jumlah_pengguna'] ?>, <?php endforeach; ?>],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            usePointStyle: true,
                            boxHeight: 8,
                            padding: 20

                        },
                        position: 'right'

                    }
                }
            }
        });
    </script>