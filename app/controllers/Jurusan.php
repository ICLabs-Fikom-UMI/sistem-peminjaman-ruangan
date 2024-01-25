<?php

class Jurusan extends Controller {
    public function index(){
        $data['judul'] = 'Data Jurusan';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('jurusan/index');
        $this->view('templates/footer');
    }
}