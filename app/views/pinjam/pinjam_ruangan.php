    <div class="row">
        <div class="col-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-8">
            <div class="form-container-1">
                <h5 class="text-center">Lab Multimedia</h5>
                <div class=" d-flex align-items-center mt-4">
                    <div class="line"></div>
                    <p style="margin: 0 10px; font-size:12px;">Data Peminjaman</p>
                    <div class="line"></div>
                </div>
                <form action="<?= BASEURL ?>/peminjaman/tambah" method="post" enctype="multipart/form-data">
                    <div class="row mt-4">
                        <div class="form-group col-md-6 mb-3">
                            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam:</label>
                            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                        </div>
                        <div class="form-group col-md-3 mb-3">
                            <label for="waktuMulai" class="form-label">Waktu Mulai:</label>
                            <input type="time" class="form-control" id="waktuMulai" name="waktu_mulai" required>
                        </div>
                        <div class="form-group col-md-3 mb-3">
                            <label for="waktu_selesai" class="form-label">Waktu Selesai:</label>
                            <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="kegiatan" class="form-label">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukkan nama kegiatan">
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label for="jumlah_peserta" class="form-label">Jumlah Peserta:</label>
                            <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" min="1" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="file_dokumen" class="form-label">Unggah Dokumen:</label>
                        <input type="file" class="form-control" id="file_dokumen" name="file_dokumen" accept=".doc, .docx, .pdf" required>
                    </div>
                    <!-- Tambahkan input tanggal, waktu mulai, waktu selesai -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mx-2">Submit</button>
                        <button type="button" class="btn btn-secondary mx-2 " onclick="history.go(-1);">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class=" col-4">
            <div class="form-container-1">
                <h5 class="text-center">Info Ruangan</h5>
                <div class=" d-flex align-items-center mt-4">
                    <div class="line"></div>
                    <p style="margin: 0 10px; font-size:12px;">Data Ruangan</p>
                    <div class="line"></div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <img src="<?= BASEURL; ?>/img/multimedia.jpg" class="rounded img-fluid" alt="">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <h5>Computer Vision</h5>

                        <div class="d-flex">
                            <p class="text-success me-3">Tersedia</p>
                            <p class="text-muted me-3">Lantai 2</p>
                            <p class="text-info">24 Orang</p>
                        </div>

                        <p style="margin:0">Biasa digunakan untuk praktikum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>