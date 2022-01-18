<?php

namespace App\Services;

use App\Constants\PublicRoutes;

class AccessControlService
{


    /**
     * @param string $routeToGo
     * @param string $method
     * @return bool
     */
    public static function grantAccess(string $routeToGo, string $method): bool
    {

        if (PublicRoutes::isPublicRoute($routeToGo)) {
            return true;
        }

        $user = self::checkLogin();
        $permissions = $user->roles->pluck('permissions')->flatten()->toArray();

        $availableRoutes = self::getAllAvailableRoutes($permissions);

        return self::isAccessible($availableRoutes, $routeToGo, $method) || self::isSuperUser($user);
    }

    private static function checkLogin()
    {
        if (is_null($user = $_SESSION['user'])) {
            header('Location: /login');
        }
        return $user;
    }


    private static function isSuperUser($user)
    {
        foreach ($user->roles as $role) {
            if ($role->role_name == 'super_user') {
                return true;
            }
        }
    }

    /**
     * @param $routes
     * @param $route
     * @param $method
     * @return bool
     */
    private static function isAccessible($routes, $route, $method): bool
    {
        foreach ($routes as $routeItem) {
            if ($routeItem['route'] == $route && $routeItem['method'] == $method) {
                return true;
            }
        }
        return false;
    }


    /**
     * @param $permissions
     * @return array
     */
    private static function getAllAvailableRoutes($permissions): array
    {
        $routes = [];
        foreach ($permissions as $permission) {
            $route = [];
            $route['route'] = $permission['route'];
            $route['method'] = $permission['method'];
            $routes[] = $route;
        }
        return $routes;
    }

}