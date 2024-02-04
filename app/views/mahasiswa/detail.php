<div class="container-user shadow rounded">


    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pengguna</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $data['user']['nama_lengkap']; ?></td>
                        <td>
                            <p class="card-text"><?= $data['user']['email']; ?>
                        </td>
                        <td><?= $data['user']['nim']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>

</div>