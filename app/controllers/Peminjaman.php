<?php

class Peminjaman extends Controller {
    public function index(){
        $data['judul'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['total_peminjaman'] = $this->model('Peminjaman_model')->getTotalPeminjaman();
        $data['total_disetujui'] = $this->model('Peminjaman_model')->countApprovedPeminjaman();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {

        // Pastikan ID pengguna sudah disimpan dalam sesi setelah login
        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'];

            // Panggil metode tambahDataPeminjaman() dengan menyertakan ID pengguna
            if ($this->model('Peminjaman_model')->tambahDataPeminjaman($_POST, $id_user) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Peminjaman');
                header('Location: ' . BASEURL . '/pinjam');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Peminjaman');
                header('Location: ' . BASEURL . '/pinjam');
                exit;
            }
        } else {
            // Handle jika ID pengguna tidak tersedia dalam sesi
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Meminjam');
            header('Location: ' . BASEURL . '/pinjam');
            exit;
        }
    }

    public function setujui($idPeminjaman)
    {
        // Panggil model untuk mengubah status peminjaman menjadi "Disetujui"
        if ($this->model('Peminjaman_model')->setujuiPeminjaman($idPeminjaman)) {
            Flasher::setFlash('berhasil', 'disetujui', 'success', 'Peminjaman');
        } else {
            Flasher::setFlash('gagal', 'disetujui', 'danger', 'Peminjaman');
        }
        // Redirect kembali ke halaman data peminjaman
        header('Location: ' . BASEURL . '/peminjaman');
    }

    public function tolak($idPeminjaman)
    {
        // Panggil model untuk mengubah status peminjaman menjadi "Ditolak"
        if ($this->model('Peminjaman_model')->tolakPeminjaman($idPeminjaman)) {
            Flasher::setFlash('berhasil', 'ditolak', 'success', 'Peminjaman');
        } else {
            Flasher::setFlash('gagal', 'ditolak', 'danger', 'Peminjaman');
        }
        // Redirect kembali ke halaman data peminjaman
        header('Location: ' . BASEURL . '/peminjaman');
    }

}