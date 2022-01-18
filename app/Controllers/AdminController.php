<?php

namespace App\Controllers;

use App\Models\Permission;
use App\Models\Role;
use JetBrains\PhpStorm\ArrayShape;
use Laminas\Diactoros\Response\HtmlResponse;

class AdminController extends Controller
{

    public function index(): HtmlResponse
    {

        return self::view('admin/index.twig',
            $this->getRolesWithPermissions());
    }

    public function updateRoles($request): HtmlResponse
    {
        $data = $request->getParsedBody();
        $role = Role::find($data["role_id"]);
        foreach (Permission::all() as $permission) {
            $role->permissions()->detach($permission);
        }

        foreach ($data as $permission => $allowed) {
            if ($allowed) {
                $perm = Permission::find($permission);
                $role->permissions()->attach($perm);
            }
        }

        return self::view('admin/index.twig',
            $this->getRolesWithPermissions());
    }

    private function getRolesWithPermissions(): array
    {

        $roles = Role::all();
        $permissions = Permission::all();
        return ['roles' => $roles,
            'permissions' => $permissions];

    }

}