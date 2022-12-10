<?php

class Login extends Controller {
    public function index() {
        $data['page-title'] = "Login Page";

        $this->view('templates/header', $data);
        $this->view('templates/navbar/main-navbar');
        $this->view('login/index');
        $this->view('templates/header');
    }

    public function check() {
        if ($this->model('User_model')->userLogin($_POST)) {
            header('Location: ' . BASEURL . '/dashboard');
        } else {
            $_SESSION['login'] = false;
            header('Location: ' . BASEURL . '/login');
        }
        var_dump($this->model('User_model')->getUsername());

        exit;
    }
}