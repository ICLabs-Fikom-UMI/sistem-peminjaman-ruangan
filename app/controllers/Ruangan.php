<?php

class Ruangan extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/index', $data);
        $this->view('templates/footer');
    }
}