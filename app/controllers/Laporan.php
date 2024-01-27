<?php

class Laporan extends Controller {
    public function index(){
        $data['judul'] = 'Laporan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('laporan/index');
        $this->view('templates/footer');
    }
}