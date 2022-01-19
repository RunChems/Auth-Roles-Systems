<?php

namespace App\Constants;

class UserRoles
{
    public const ADMIN = ['role' => 'admin', 'local_route' => '/admin'];
    public const MEGA_FAN = ['role' => 'MegaFan', 'local_route' => '/Megafan'];
    public const USER = ['role' => 'User', 'local_route' => '/'];
    public const SUPER_USER = ['role' => 'super_user', 'local_route' => '/admin'];

    public static function toArray(): array
    {
        return [
            self::SUPER_USER,
            self::ADMIN,
            self::MEGA_FAN,
            self::USER,
        ];
    }

    public static function matchRoute($userRoles): string
    {
        $roles = self::toArray();
        foreach ($roles as $item) {
            if (in_array($item['role'], $userRoles)) {
                $_SESSION['role'] = $item['role'];
                return $item['local_route'];
            }
        }
        return '/';
    }

}