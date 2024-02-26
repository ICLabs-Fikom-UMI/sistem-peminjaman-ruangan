<?php

session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header("Location: " . BASEURL);
    exit;
}


class Login extends Controller
{

    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('login/index', $data);
    }

    public function login()
    {
       // Validasi input
        if (empty($_POST['email']) || empty($_POST['password'])) {
            Flasher::setFlash('password', 'salah', 'danger', 'Email atau password tidak boleh kosong');
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            // Mendapatkan data pengguna berdasarkan email
            $data['login'] = $this->model('User_model')->getUserByEmail($email);

            //Memverifikasi kata sandi
            if ($data['login']) {
                foreach ($data['login'] as $row) {
                    if (password_verify($password, $row['password'])) {
                        // Kata sandi cocok, simpan informasi pengguna dalam sesi
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['id_user'] = $row['id_user'];
                        $_SESSION['role'] = $row['nama_role'];

                        // Mendapatkan level pengguna
                        $level = $this->model('Role_model')->getLevel($row['nama_role']);
                        $_SESSION['level'] = $level;

                        // Redirect ke halaman setelah login berhasil
                        header("Location: " . BASEURL);
                        exit;
                    }
                }
            }

            //Jika kredensial tidak valid, tampilkan pesan kesalahan
            Flasher::setFlash('password', 'salah', 'danger', 'Kredensial tidak valid');
            header('Location: ' . BASEURL . '/login');
            exit;
        } catch (Exception $e) {
            // Tangani eksepsi atau kesalahan yang terjadi
            // Catat pesan kesalahan atau lakukan tindakan yang sesuai
            echo "Terjadi kesalahan: " . $e->getMessage();
            exit;
        }
    }
}
