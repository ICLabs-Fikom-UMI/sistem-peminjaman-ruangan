<?php

class Jurusan extends Controller {
    public function index(){
        $data['judul'] = 'Data Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $data['jumlahJurusan'] = $this->model('jurusan_Model')->hitungJumlahJurusan()['jumlah'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }

        public function tambah()
    {
        if ($this->model('Jurusan_model')->tambahDataJurusan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }
}