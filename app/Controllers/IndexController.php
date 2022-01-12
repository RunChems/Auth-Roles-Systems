<?php

namespace App\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['route'] = 'login';
            return $this->view('Auth/login.twig');
        }

        return self::view("index.twig");
    }
}
