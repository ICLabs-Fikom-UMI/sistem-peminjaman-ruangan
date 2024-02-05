<?php

class Pengaturan extends Controller {
    public function index(){
        $data['judul'] = 'Pengaturan';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pengaturan/index',$data);
        $this->view('templates/footer');
    }
}