<?php


$map->get('index', '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'index',
]);

$map->get('register', '/register', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'show_register']);

$map->post('register.create', '/register', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'register']);


$map->get('login', '/login', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'login']);

$map->post('login.auth', '/login', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'authenticate']);

$map->get('logout', '/logout', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'logout']);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
    require '../views/404.twig';
} else {


    $_SESSION['route'] = $route->name;
    $handlerData = $route->handler;
    $action = $handlerData['action'];
    $controller = new $handlerData['controller'];
    $response = $controller->$action($request);
    echo $response->getBody();
}
