<?php

namespace App\Constants;

class PublicRoutes
{
    const GLOBAL = ['index'];
    const AUTH = ['login', 'register', 'register.create',
        'forgot-password',
        'reset-password', 'login.auth', 'logout'];

    public static function isPublicRoute($route): bool
    {
        $routes = array_merge(self::GLOBAL, self::AUTH);
        return in_array($route, $routes);
    }
}