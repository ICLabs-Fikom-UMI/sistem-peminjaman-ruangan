<?php

class Daftar extends Controller {
    public function index(){
        $data['judul'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('Daftar/index');
    }

    public function daftar(){


        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Daftar');
            header('Location: ' . BASEURL . '/daftar');
            exit;
        }
    }
}

