<?php

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