<?php 

class Peminjam extends Controller {
    public function index(){
        $data['judul'] = "Beranda";
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjam/index', $data);
        $this->view('templates/footer');
    }
}