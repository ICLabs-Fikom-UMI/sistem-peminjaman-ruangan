<?php

class Ruangan extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Ruangan';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('ruangan/index');
        $this->view('templates/footer');
    }
}