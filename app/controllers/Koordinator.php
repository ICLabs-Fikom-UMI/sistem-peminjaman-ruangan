<?php

class Koordinator extends Controller {
    public function data_ruangan(){
        $data['judul'] = 'Ruangan IOT';
        $id_user = $_SESSION['id_user'];
        $nama_ruangan= $this->model('Ruangan_model')->getRuanganByUserId($id_user);
        $nama_ruangan =implode(", ", $nama_ruangan);
        $data["ruangan"] = $this->model('Peminjaman_model')->getPeminjamanByRuangan($nama_ruangan);


        // Jika nama ruangan ditemukan, lanjutkan untuk mendapatkan data peminjaman
        // if ($nama_ruangan) {
        //     // Mendapatkan data peminjaman berdasarkan nama ruangan
        //     $peminjaman = $this->model('Peminjaman_model')-> getPeminjamanByRuangan($nama_ruangan);

        //     // Lakukan apa pun yang Anda inginkan dengan data peminjaman, seperti menampilkannya ke pengguna
        //     var_dump($peminjaman);
        // } else {
        //     echo "Tidak ada ruangan yang ditemukan untuk pengguna dengan ID $id_user sebagai Koordinator Lab.";
        // }
        // $nama_ruangan = $this->model('Ruangan_model')->getRuanganByUserIdAndRoleId($id_user);
        // $data['ruangan'] = $this->model('Peminjaman_model')->getPeminjamanByRuangan($nama_ruangan);
        // var_dump($data['ruangan']);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar', $data);
        $this->view('koordinator/data_ruangan', $data);
        $this->view('templates/footer');
    }
}