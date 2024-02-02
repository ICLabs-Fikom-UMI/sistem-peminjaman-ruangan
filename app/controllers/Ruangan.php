<?php

class Ruangan extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        $data['jumlahTotalRuangan'] = $this->model('Ruangan_model')->hitungTotalRuangan();
        $data['korlab'] = $this->model('Role_model')->getKoordinatorLabUsers();
        
        //$data['jumlahRuanganTersedia'] = $this->model('Ruangan_model')->hitungRuanganTersedia();
        // $data['jumlahRuanganTidakTersedia'] = $this->model('Ruangan_model')->hitungRuanganTidakTersedia()['ruangan_tidak_tersedia'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('ruangan/index', $data);
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
}