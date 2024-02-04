<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
    }

    public function login()
    {
        $data['login'] = $this->model('Mahasiswa_model')->getUser($_POST['email'], $_POST['password']);

        session_start();
        if (!empty($data['login'])) {
            $row = $data['login'][0];
            if (password_verify($_POST['password'], $row['password'])) {
                $_SESSION["login"] = true;
                header("Location:" . BASEURL);
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'login', 'danger', 'Mahasiswa');
            header("Location:" . BASEURL . "/login");
            exit;
        }
    }
}


// class Login extends Controller {
//     public function index()
//     {
//         $data['judul'] = 'Login';
//         $this->view('templates/header', $data);
//         $this->view('login/index', $data);
//     }

//     public function login (){

//         $data['login'] = $this->model('Mahasiswa_model')->getUser($_POST['email'], $_POST['password']);

//         session_start();
//         if($data['login'] === 1){
//             foreach ($data['login'] as $row) :
//                 if (password_verify($_POST['password'], $row['password'])){
//                     $_SESSION["login"] = true;
//                     header("Location:" . BASEURL);
//                 }
//             endforeach;

//         }else{
//             Flasher::setFlash('Gagal', 'login', 'danger', 'Mahasiswa');
//             header("Location:" . BASEURL . "/login");

//         }
//     }

    
//}