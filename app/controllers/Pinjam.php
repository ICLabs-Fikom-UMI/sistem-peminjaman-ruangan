<?php

class Pinjam extends Controller{
    public function index()
    {
        $data['judul'] = 'Pinjam Ruangan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('pinjam/page',$data);
        $this->view('templates/footer');

    }
}