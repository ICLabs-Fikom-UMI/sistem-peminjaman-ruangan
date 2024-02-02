        <div class="row">
            <div class="col-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <script src="..\public\js\flash.js"></script>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-block d-flex justify-content-between">
                        <div>
                            <h6>Jurusan</h6>
                            <h2><span><?php echo $data['jumlahJurusan'];  ?></span></h2>
                            <p>Total Jurusan Keseluruhan</p>
                        </div>
                        <div>
                            <img src="..\public\img\pinjam.svg" alt="Mahasiswa">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-user rounded">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary tombolTambahJurusan" data-bs-toggle="modal" data-bs-target="#formModal">
                        <i class="fa-solid fa-plus"></i>
                        Tambah Jurusan
                    </button>
                </div>
            </div>

            <div class="horizontal-line"></div>
            <div class="card-body mt-3">
                <table id="example" class="table table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ketua Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($data['jurusan'] as $jurusan) :
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $jurusan['nama_jurusan']; ?></td>
                                <td><?= $jurusan['ketua_jurusan']; ?></td>
                                <td class="icon-container" style="text-align: center;">
                                    <a href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id_jurusan']; ?>" class="tombolEditJurusan" data-id="<?= $jurusan['id_jurusan']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id_jurusan']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!-- End Card Data Jurusan-->

        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Jurusan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
                            <input type="hidden" name="id_jurusan" id="id_jurusan">

                            <div class="form-group mb-3">
                                <label for="namaJurusan" class="form-label">Nama Jurusan</label>
                                <input type="text" class="form-control" id="namaJurusan" placeholder="Masukkan nama jurusan" name="namaJurusan" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ketuaJurusan" class="form-label">Ketua Jurusan</label>
                                <input type="text" class="form-control" id="ketuaJurusan" placeholder="Masukkan ketua jurusan" name="ketuaJurusan" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>