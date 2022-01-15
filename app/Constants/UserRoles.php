<?php

namespace App\Constants;

class UserRoles
{
    public const ADMIN = ['role' => 'admin', 'local_route' => '/admin'];
    public const USER = ['role' => 'User', 'local_route' => '/'];
    public const MEGA_FAN = ['role' => 'Megafan', 'local_route' => '/'];

    public static function toArray(): array
    {
        return [
            self::ADMIN,
            self::USER,
            self::MEGA_FAN,
        ];
    }

    public static function matchRoute($userRoles): string
    {
        $roles = self::toArray();
        foreach ($roles as $item) {
            if (in_array($item['role'], $userRoles)) {
                return $item['local_route'];
            }
        }
        return '/';
    }

}