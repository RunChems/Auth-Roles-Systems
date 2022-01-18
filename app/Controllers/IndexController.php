<?php

namespace App\Controllers;

use Laminas\Diactoros\Response\HtmlResponse;

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

    public function megafan(): HtmlResponse
    {
        return self::view('megafan.twig');
    }


}
