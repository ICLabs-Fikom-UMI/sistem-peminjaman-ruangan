<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $data['jumlahJurusan'] = $this->model('jurusan_Model')->hitungJumlahJurusan()['jumlah'];
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
