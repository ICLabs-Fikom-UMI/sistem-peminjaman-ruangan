<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Jurusan extends Controller {
    public function index(){
        $data['judul'] = 'Data Jurusan';
        $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $data['jumlahJurusan'] = $this->model('jurusan_Model')->hitungJumlahJurusan()['jumlah'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Jurusan_model')->tambahDataJurusan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan','danger', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Jurusan_model')->getJurusanById($_POST['id_jurusan']));
    }

    public function ubah()
    {
        if ($this->model('Jurusan_model')->ubahDataJurusan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah','danger', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Jurusan_model')->hapusDataJurusan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus','success', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus','danger', 'Jurusan');
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        }
    }
}