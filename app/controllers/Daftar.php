<?php

class Daftar extends Controller {
    public function index(){
        $data['judul'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('Daftar/index');
    }

    public function daftar(){
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            echo "alert('User baru berhasil di tambahkan')";
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}

