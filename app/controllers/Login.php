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
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data['login'] = $this->model('User_model')->getUser($email, $password);

        if(!$data['login']){
            header("Location:" . BASEURL . "/login" );
        }else{
            foreach($data['login'] as $row):
                $_SESSION['email'] = $row['email'];
                header("Location:" . BASEURL);
            endforeach;
        }
    }
}
