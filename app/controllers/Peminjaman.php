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

}