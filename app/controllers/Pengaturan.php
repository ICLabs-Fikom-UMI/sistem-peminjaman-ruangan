<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Pengaturan extends Controller {
    public function index(){
        $data['judul'] = 'Pengaturan';
        $id_user = $_SESSION['id_user'];
        $data['dataUser'] = $this->model('Mahasiswa_model')->getMahasiswaById($id_user);
        $data['dataJurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pengaturan/index',$data);
        $this->view('templates/footer');
    }

    public function ubahprofile()
    {
        $id_user = $_SESSION['id_user'];
        if ($this->model('Mahasiswa_model')->update_profile($_POST, $id_user) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'Profile');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'Profile');
            header('Location: ' . BASEURL . '/pengaturan');
        }
    }

    public function ubahpassword(){
        $id_user = $_SESSION['id_user'];
        if ($this->model('Mahasiswa_model')->update_profile($_POST, $id_user) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'Profile');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'Profile');
            header('Location: ' . BASEURL . '/pengaturan');
        }
    }

    public function ubahemail(){
        $id_user = $_SESSION['id_user'];
        $new_email = $_POST['email'];
        if ($this->model('Mahasiswa_model')->update_email($new_email, $id_user) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'email');
            header('Location: ' . BASEURL . '/pengaturan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'email');
            header('Location: ' . BASEURL . '/pengaturan');
        }
    }
}