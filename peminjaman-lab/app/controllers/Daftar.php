<?php

class Daftar extends Controller {
    public function index(){
        $data['judul'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('daftar/index', $data);
        $this->view('templates/footer');
    }

    public function daftar(){
        
    }
}