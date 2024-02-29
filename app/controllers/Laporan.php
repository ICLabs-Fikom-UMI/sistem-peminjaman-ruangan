<?php
session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}

class Laporan extends Controller {
    // public function index(){
    //     $data['judul'] = 'Laporan';
    //     $data['dikembalikan'] = $this->model('Peminjaman_model')->getPeminjamanDikembalikan();
    //     $this->view('templates/header', $data);
    //     $this->view('templates/sidebar');
    //     $this->view('templates/topbar');
    //     $this->view('laporan/index',$data);
    //     $this->view('templates/footer');
    // }

    public function index()
    {
        $data['judul'] = 'Laporan';
        //periksa apakah ada filter yang dikirimkan
        if (isset($_POST['tanggalAwal']) && isset($_POST['tanggalAkhir'])) {
            $start_date = $_POST['tanggalAwal'];
            $end_date = $_POST['tanggalAkhir'];

            $data['dikembalikan'] = $this->model('Peminjaman_model')->getPeminjamanBydate($start_date, $end_date);
        }else{
            // Jika tidak, ambil semua data
            $data['dikembalikan'] = $this->model('Peminjaman_model')->getPeminjamanDikembalikan();
        }

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('laporan/index', $data);
        $this->view('templates/footer');
    }

    public function cetak(){
        $data['judul'] = 'Data Peminjaman';
        $data['dikembalikan'] = $this->model('Peminjaman_model')->getPeminjamanDikembalikan();
        $this->view('laporan/cetak', $data);
    }
}