<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $data['jumlahJurusan'] = $this->model('Jurusan_Model')->hitungJumlahJurusan()['jumlah'];
        $data['totalPengguna'] = $this->model('Mahasiswa_Model')->getTotalUsers();
        $data['jumlahTotalRuangan'] = $this->model('Ruangan_model')->hitungTotalRuangan();
        $data['total_peminjaman'] = $this->model('Peminjaman_model')->getTotalPeminjaman();
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
