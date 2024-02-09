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
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        // $data['login'] = $this->model('User_model')->getUser($email, $password);

        // if(!$data['login']){

        //     $id_user = $data['login']['id_user'];

        //     // Simpan email dan ID pengguna dalam sesi
        //     $_SESSION['email'] = $email;
        //     $_SESSION['id_user'] = $id_user;

        //     header("Location:" . BASEURL . "/login" );
        // }else{
        //     foreach($data['login'] as $row):
        //         $_SESSION['email'] = $row['email'];
        //         header("Location:" . BASEURL);
        //     endforeach;
        // }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $data['login'] = $this->model('User_model')->getUser($email, $password);

        // Periksa apakah kredensial valid
        if ($data['login']) {
            foreach ($data['login'] as $row) {
                // Simpan email dan ID pengguna dalam sesi
                $_SESSION['email'] = $row['email'];
                $_SESSION['id_user'] = $row['id_user'];

                // Redirect ke halaman setelah login berhasil
                header("Location: " . BASEURL);
                exit;
            }
        } else {
            // Jika kredensial tidak valid, tampilkan pesan kesalahan
            echo "Username atau password salah.";
            Flasher::setFlash('password', 'salah', 'danger', 'Username');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }
}
