<?php

session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Pinjam extends Controller{
    public function index()
    {
        $data['judul'] = 'Pinjam Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        foreach ($data['ruangan'] as &$ruangan) {
            $ruangan['countReservation'] = $this->model('Peminjaman_model')->countPeminjamanByRoom($ruangan['id_ruangan']);
        }
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/index', $data);
        $this->view('templates/footer');
    }

    public function dashboard(){
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'dashboard';
        $data['Peminjaman'] = $this->model('Peminjaman_Model')->countPeminjamanPerUser($id_user);
        $data['Tersedia'] = $this->model('Ruangan_model')->countTotalRuanganTersedia();
        $data['Disetujui'] = $this->model('Peminjaman_Model')->countApprovedPeminjamanPerUser($id_user);
        $data['Ditolak'] = $this->model('Peminjaman_Model')->countRejectedPeminjamanByUser($id_user);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/dashboard', $data);
        $this->view('templates/footer');
    }

    public function peminjaman_saya(){
        $data['judul'] = 'Peminjaman Saya';
        $id_user = $_SESSION['id_user'];
        $data['total_peminjaman']= $this->model('Peminjaman_Model')->countPeminjamanPerUser($id_user);
        $data['total_disetujui']= $this->model('Peminjaman_Model')->countApprovedPeminjamanPerUser($id_user);
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjamanByUserId($id_user);
        $data['Ditolak'] = $this->model('Peminjaman_Model')->countRejectedPeminjamanByUser($id_user);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('pinjam/peminjaman_saya',$data);
        $this->view('templates/footer');

    }

    public function riwayat(){
        $id_user = $_SESSION['id_user'];
        $data['riwayat'] = $this->model('Peminjaman_Model')->getRiwayatPeminjaman($id_user);
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
        if ($this->model('Peminjaman_model')->cancelPeminjaman($id_peminjaman)) {
            Flasher::setFlash('berhasil', 'dibatalkan', 'success', 'Peminjaman');
        } else {
            Flasher::setFlash('gagal', 'dibatalkan', 'danger', 'Peminjaman');
        }

        // Redirect kembali ke halaman peminjaman pengguna
        header('Location: ' . BASEURL . '/pinjam/peminjaman_saya');
    }

    public function kembalikan($id_peminjaman)
    {
        // Panggil model untuk membatalkan peminjaman
        $peminjamanModel = $this->model('Peminjaman_model');
        // $result = $peminjamanModel->kembalikanPeminjaman($id_peminjaman);

        // if ($result) {
        //     // Jika pengembalian berhasil, set flash message berhasil
        //     Flasher::setFlash('berhasil', 'dikembalikan', 'success', 'Peminjaman');
        // } else {
        //     // Jika terjadi kesalahan, set flash message gagal
        //     Flasher::setFlash('gagal', 'dikembalikan', 'danger', 'Peminjaman');
        // }

        // Memperbarui status peminjaman
        if ($peminjamanModel->kembalikanPeminjaman($id_peminjaman)) {
            // Mengambil ID ruangan yang dipinjam dari data peminjaman
            $peminjaman = $peminjamanModel->getPeminjamanById($id_peminjaman);
            $id_ruangan = $peminjaman['id_ruangan'];

            // Memperbarui status ruangan
            if ($this->model('Ruangan_model')->ubahStatusRuangan($id_ruangan, 'Tersedia') > 0) {
                Flasher::setFlash('berhasil', 'dikembalikan', 'success', 'Peminjaman');
            }
        } else {
            Flasher::setFlash('gagal', 'dikembalikan', 'danger', 'Peminjaman');
        }
        
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