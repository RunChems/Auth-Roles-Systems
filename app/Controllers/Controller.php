<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Laminas\Diactoros\Response\HtmlResponse;

class Controller
{
    const BASE_PATH = '..';
    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(self::BASE_PATH . '/views');

        $this->twig = new Environment($this->loader, [
            'cache' => self::BASE_PATH . '/Storage/views',
            'debug' => true,
        ]);
    }

    protected function view(string $view, $data = []): HtmlResponse
    {
        return new HtmlResponse($this->twig->render($view, array_merge($data, ['session' => $_SESSION])));
    }
}