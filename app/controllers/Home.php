<?php

session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $data['jumlahJurusan'] = $this->model('Jurusan_Model')->hitungJumlahJurusan()['jumlah'];
        $data['totalPengguna'] = $this->model('Mahasiswa_Model')->getTotalUsers();
        $data['jumlahTotalRuangan'] = $this->model('Ruangan_model')->hitungTotalRuangan();
        $data['total_peminjaman'] = $this->model('Peminjaman_model')->getTotalPeminjaman();
        $data['dataRuanganPeminjaman'] = $this->model('Ruangan_model')->getRuanganAndPeminjamanCount();
        $this->view('templates/sidebar');
        $this->view('templates/topbar', $data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
