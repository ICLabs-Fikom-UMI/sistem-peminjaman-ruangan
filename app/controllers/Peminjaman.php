<?php

class Peminjaman extends Controller {
    public function index(){
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['total_peminjaman'] = $this->model('Peminjaman_model')->getTotalPeminjaman();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST) > 0) {
        //     Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Meminjam');
        //     header('Location: ' . BASEURL . '/pinjam');
        //     exit;
        // } else {
        //     Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Meminjam');
        //     header('Location: ' . BASEURL . '/pinjam');
        //     exit;
        // }

        // Pastikan ID pengguna sudah disimpan dalam sesi setelah login
        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'];

            // Panggil metode tambahDataPeminjaman() dengan menyertakan ID pengguna
            if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST, $id_user) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Peminjaman');
                header('Location: ' . BASEURL . '/pinjam');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Peminjaman');
                header('Location: ' . BASEURL . '/pinjam');
                exit;
            }
        } else {
            // Handle jika ID pengguna tidak tersedia dalam sesi
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Meminjam');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        }
    }

}