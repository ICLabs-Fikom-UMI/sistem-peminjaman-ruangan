<div class="row">


    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['mhs']['nim']; ?></h6>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div> -->

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
                <td><?= $data['mhs']['nama']; ?></td>
                <td>
                    <p class="card-text"><?= $data['mhs']['email']; ?>
                </td>
                <td><?= $data['mhs']['jurusan']; ?></td>
            </tr>
        </tbody>
    </table>

    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>

</div>