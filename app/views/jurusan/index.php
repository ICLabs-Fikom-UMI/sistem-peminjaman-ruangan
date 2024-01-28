        <div class="row">
            <div class="col-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>

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

        <!-- Card Data Jurusan-->
        <div class="row mb-3">
            <div class="col-4">
                <form action="<?= BASEURL; ?>/jurusan/tambah" method="post" class="container-user rounded">
                    <div class="form-group mb-3">
                        <label for="namaJurusan" class="form-label">Nama Jurusan</label>
                        <input type="text" class="form-control" id="namaJurusan" placeholder="Masukkan nama jurusan" name="namaJurusan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ketuaJurusan" class="form-label">Ketua Jurusan</label>
                        <input type="text" class="form-control" id="ketuaJurusan" placeholder="Masukkan ketua jurusan" name="ketuaJurusan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>

            <div class="col-8">
                <div class="container-user rounded">
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
                                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class=" fa-solid fa-pen-to-square"></i></a>
                                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('yakin?');"> <i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Card Data Jurusan-->