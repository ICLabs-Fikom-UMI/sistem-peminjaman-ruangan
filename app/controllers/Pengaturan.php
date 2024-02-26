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
}