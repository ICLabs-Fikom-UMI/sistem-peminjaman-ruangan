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

    public function pinjam_ruangan(){
        $data['judul'] = 'Pinjam Ruangan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/pinjam_ruangan',$data);
        $this->view('templates/footer');

    }

    public function peminjaman_saya(){
        $data['judul'] = 'Pinjam Ruangan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/peminjaman_saya',$data);
        $this->view('templates/footer');

    }

}