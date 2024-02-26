<?php

class Passwordreset extends Controller{
    public function index(){
        $data['judul'] = 'Password Reset';
        $this->view('passwordreset/index', $data);
    }

}