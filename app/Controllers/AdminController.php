<?php

namespace App\Controllers;

use App\Models\Auth;
use App\Models\Permission;
use App\Models\Role;
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

    private function getAuthAndRoles(): array
    {
        $users = Auth::all();

        return ['users' => $users,
            'roles' => Role::all()];

    }

    public function users()
    {
        return self::view('admin/users.twig', $this->getAuthAndRoles());
    }

    public function updateUsers($request)
    {

        $data = $request->getParsedBody();
        $user = Auth::find($data["user"]);
        foreach (Role::all() as $role) {
            $user->roles()->detach($role);
        }

        foreach ($data as $role => $allowed) {
            if ($allowed) {
                $rol = Role::find($role);
                $user->roles()->attach($rol);
            }
        }

        return self::view('admin/users.twig',
            $this->getAuthAndRoles());

    }

}