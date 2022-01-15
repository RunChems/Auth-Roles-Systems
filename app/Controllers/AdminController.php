<?php

namespace App\Controllers;

use Laminas\Diactoros\Response\HtmlResponse;

class AdminController extends Controller
{

    public function index(): HtmlResponse
    {
        return self::view('admin/index.twig');
    }


}

