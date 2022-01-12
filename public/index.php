<?php
//Debug errors in dev mode


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('session.gc_maxlifetime', 60 * 60 * 24);
ini_set('session.cookie_lifetime', 60 * 60 * 24);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once '../config/database.php';

use Aura\Router\RouterContainer;

session_start();

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();


$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

require_once '../routes/web.php';