<?php

class Pinjam extends Controller{
    public function index()
    {
        $data['judul'] = 'Pinjam Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function dashboard(){
        $data['judul'] = 'dashboard';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/dashboard');
        $this->view('templates/footer');
    }

    public function peminjaman_saya(){
        $data['judul'] = 'Peminjaman Saya';
        $id_user = $_SESSION['id_user'];
        $data['total_peminjaman']= $this->model('Peminjaman_Model')->countPeminjamanPerUser($id_user);
        $data['total_disetujui']= $this->model('Peminjaman_Model')->countApprovedPeminjamanPerUser($id_user);
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjamanByUserId($id_user);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/peminjaman_saya',$data);
        $this->view('templates/footer');

    }

    public function riwayat(){
        $data['judul'] = 'Riwayat Peminjaman';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/riwayat', $data);
        $this->view('templates/footer');
    }

    // Fungsi untuk membatalkan peminjaman
    public function batalkan_peminjaman($id_peminjaman)
    {
        // Panggil model untuk memperbarui status peminjaman menjadi "Dibatalkan"
        $this->model('Peminjaman_model')->cancelPeminjaman($id_peminjaman);

        // Redirect kembali ke halaman peminjaman pengguna
        header('Location: ' . BASEURL . '/pinjam/peminjaman_saya');
    }

    // Fungsi untuk membatalkan peminjaman
    public function kembalikan($id_peminjaman)
    {
        // Panggil model untuk memperbarui status peminjaman menjadi "Dibatalkan"
        $this->model('Peminjaman_model')->cancelPeminjaman($id_peminjaman);

        // Redirect kembali ke halaman peminjaman pengguna
        header('Location: ' . BASEURL . '/pinjam/peminjaman_saya');
    }



    public function cari()
    {
        $data['judul'] = 'Pinjam Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->cariDataRuangan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

}