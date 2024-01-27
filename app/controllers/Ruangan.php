<?php

class Ruangan extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Ruangan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/index');
        $this->view('templates/footer');
    }
}