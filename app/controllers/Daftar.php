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
        $data['dataJurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $this->view('templates/header', $data);
        $this->view('daftar/index', $data);
    }

    public function daftar(){

        $password =  $_POST["password"];
        $password2 = $_POST["confirm_password"];
        // cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
        alert('konfirmasi password tidak sesuai!');
        </script>";
            return false;
        }


        // enkripsi password
        $newPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST, $newPassword) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
            exit;
        }
    }
}

