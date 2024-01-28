<?php

class Peminjaman extends Controller {
    public function index(){
        $data['judul'] = 'Data Peminjaman';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjaman/index');
        $this->view('templates/footer');
    }
}