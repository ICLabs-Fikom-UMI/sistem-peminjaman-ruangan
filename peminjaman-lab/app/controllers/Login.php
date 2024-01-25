<?php

class Login extends Controller {
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }

    public function login (){

        $data['login'] = $this->model('User_model')->getUser($_POST['email'], $_POST['password']);

        session_start();
        if($data['login'] == NULL){
            header("Location:" .BASEURL. "/login");
        }else{
            foreach($data['login'] as $row):
                $_SESSION['nama'] = $row['nama'];
                header("Location:" .BASEURL);
            endforeach;
        }
    }
}