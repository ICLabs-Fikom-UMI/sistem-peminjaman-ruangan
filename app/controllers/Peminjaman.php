<?php

class Peminjaman extends Controller {
    public function index(){
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['total_peminjaman'] = $this->model('Peminjaman_model')->getTotalPeminjaman();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Mahasiswa');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        }
    }

}