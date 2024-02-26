<?php

session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Jika tidak ada sesi email, redirect ke halaman login
    header("Location: " . BASEURL . "/login");
    exit;
}


class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['user'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $data['jumlahUser'] = $this->model('Role_model')->getCountUser();
        $data['jumlahKorlab'] = $this->model('Role_model')->getCountKoordinatorLab();
        $data['jumlahKelab'] = $this->model('Role_model')->getCountKepalaLab();
        $data['jumlahAdmin'] = $this->model('Role_model')->getCountAdmin();
        $data['dataRole']= $this->model('Role_model')->getAllRole();
        $data['dataJurusan']= $this->model('Jurusan_model')->getAllJurusan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan','success', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan','danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus','danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id_user']));

    }

    public function ubah()
    {
        // $targetDirectory = 'profile';
        // $profile = ImageUpload::upload('uploadFoto', $targetDirectory);

        // // Memeriksa apakah upload gambar thumbnail berhasil
        // if ($profile === false) {
        //     // Jika gagal upload, tampilkan pesan kesalahan dan redirect kembali ke halaman ruangan
        //     Flasher::setFlash('gagal', 'upload gambar', 'danger', 'Profile');
        //     header('Location: ' . BASEURL . '/pengaturan');
        //     exit;
        // }

        // $_POST['uploadFoto'] = $profile;

        $password =  $_POST["password"];
        $password2 = $_POST["confirm_password"];
        // cek konfirmasi password
        if ($password !== $password2) {
            echo "<script>
        alert('konfirmasi password tidak sesuai!');
        </script>";
            return false;
        }

        // enkripsi password
        $newPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST, $newPassword) > 0) {
            Flasher::setFlash('berhasil', 'diubah','success', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah','danger', 'Mahasiswa');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function getJurusanById()
    {
        $id_jurusan = $_POST['id_jurusan'];
        $dataJurusan = $this->model('Jurusan_model')->getJurusanById($id_jurusan);
        echo json_encode($dataJurusan);
    }

    public function getRoleById()
    {
        $id_role = $_POST['id_role'];
        $dataRole = $this->model('Role_model')->getRoleById($id_role);
        echo json_encode($dataRole);
    }
}
