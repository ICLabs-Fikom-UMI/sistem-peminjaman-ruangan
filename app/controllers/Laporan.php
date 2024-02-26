<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Laporan extends Controller {
    public function index(){
        $data['judul'] = 'Laporan';
        $data['dikembalikan'] = $this->model('Peminjaman_model')->getPeminjamanDikembalikan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('laporan/index',$data);
        $this->view('templates/footer');
    }
}