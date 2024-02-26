<?php

session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Ruangan extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        $data['jumlahTotalRuangan'] = $this->model('Ruangan_model')->hitungTotalRuangan();
        $data['korlab'] = $this->model('Role_model')->getKoordinatorLabUsers();
        $data['ruanganTersedia'] = $this->model('Ruangan_model')->countTotalRuanganTersedia();
        $data['ruanganTidakTersedia'] = $this->model('Ruangan_model')->countTotalRuanganTidakTersedia();
        
        //$data['jumlahRuanganTersedia'] = $this->model('Ruangan_model')->hitungRuanganTersedia();
        // $data['jumlahRuanganTidakTersedia'] = $this->model('Ruangan_model')->hitungRuanganTidakTersedia()['ruangan_tidak_tersedia'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getRuanganById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/detail',$data);
        $this->view('templates/footer');
    }

    public function foto_ruangan($id){
        $data['judul'] = 'Foto Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getRuanganById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/foto_ruangan',$data);
        $this->view('templates/footer');
    }

    public function pinjam_ruangan($id)
    {
        $data['judul'] = 'Pinjam Ruangan';
        $data['user'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $data['ruangan'] = $this->model('Ruangan_model')->getRuanganById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/pinjam_ruangan', $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->model('Ruangan_model')->hapusDataRuangan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }
    }

    public function tambah()
    {
        $targetDirectory = 'thumbnail';
        $thumbnail = ImageUpload::upload('thumbnail', $targetDirectory);

        // Memeriksa apakah upload gambar thumbnail berhasil
        if ($thumbnail === false) {
            // Jika gagal upload, tampilkan pesan kesalahan dan redirect kembali ke halaman ruangan
            Flasher::setFlash('gagal', 'upload gambar', 'danger', 'ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }

        $_POST['thumbnail'] = $thumbnail;

        if ($this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Ruangan_model')->getRuanganById($_POST['id_ruangan']));
    }


    public function ubah()
    {
        if ($this->model('Ruangan_model')->ubahDataRuangan($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'Ruangan');
            header('Location: ' . BASEURL . '/ruangan');
            exit;
        }
    }

}