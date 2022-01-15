<?php


use App\Services\AccessControlService;

$map->get('index', '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'index',
]);

$map->get('register', '/register', [
    'controller' => 'App\Controllers\AuthController'
    , 'action' => 'showRegister']);

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

$map->get('admin', '/admin', [
    'controller' => 'App\Controllers\AdminController'
    , 'action' => 'index']);


$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);


if (!$route) {
    require '../views/404.twig';
} else {

    $allowed = AccessControlService::grantAccess($route->name, $request->getMethod());
    if (!$allowed) {
        require '../views/403.twig';
        exit();
    }

    $_SESSION['route'] = $route->name;
    $handlerData = $route->handler;
    $action = $handlerData['action'];
    $controller = new $handlerData['controller'];

    $response = $controller->$action($request);


    echo $response->getBody();
}
