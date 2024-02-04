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


    public function tambah()
    {
        if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/pinjam/pinjam_ruangan');
            exit;
        }
    }

}