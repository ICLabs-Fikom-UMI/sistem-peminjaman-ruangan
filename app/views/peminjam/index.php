    <div class="row">
        <div class="col-md-4 col-xl-3 mb-4">
            <div class="card">
                <div class="card-block d-flex justify-content-between">
                    <div>
                        <img src="..\public\img\ruangan.svg" alt="Total ruangan" class="mb-3">
                        <h6>Ruangan Tersedia</h6>
                        <h2><span><?php echo $data['jumlahTotalRuangan']; ?></span></h2>
                        <p>Ruangan tersedia saat ini</p>
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
                        <h6>Total Peminjaman</h6>
                        <h2><span><?php echo $data['totalPengguna']; ?></span></h2>
                        <p>Total Peminjaman</p>
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
                        <h6>Peminjaman Disetujui</h6>
                        <h2><span><?php echo $data['jumlahJurusan'];  ?></span></h2>
                        <p>Total peminjaman disetujui</p>
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
                        <h6>Peminjaman Ditolak</h6>
                        <h2><span><?php echo $data['total_peminjaman']; ?></span></h2>
                        <p>Total peminjaman ditolak</p>
                    </div>
                    <div>
                        <i class=" fa-solid fa-ellipsis-vertical"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>