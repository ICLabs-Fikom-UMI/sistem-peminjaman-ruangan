<?php

session_start();

// Jika pengguna sudah login, alihkan kembali ke halaman utama
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header("Location: " . BASEURL);
    exit;
}

class Daftar extends Controller {
    public function index(){
        $data['judul'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('daftar/index');
    }

    public function daftar(){

        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
            exit;
        }
    }
}

