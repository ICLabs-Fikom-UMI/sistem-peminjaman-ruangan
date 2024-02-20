<?php

class Laporan extends Controller {
    public function index(){
        // $data['judul'] = 'Laporan';
        // $this->view('templates/header', $data);
        // $this->view('templates/sidebar');
        // $this->view('templates/topbar');
        // $this->view('laporan/index',$data);
        // $this->view('templates/footer');

        $data['judul'] = 'Laporan';

        // Panggil model untuk mendapatkan data peminjaman yang telah selesai
        $laporanModel = $this->model('Peminjaman_model');
        $data['laporan'] = $laporanModel->getPeminjamanSelesai(); // Mengambil data peminjaman yang telah selesai

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('laporan/index', $data); // Kirim data peminjaman ke view laporan
        $this->view('templates/footer');
    
    }
}