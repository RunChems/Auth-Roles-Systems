<?php

namespace App\Controllers;

use App\Constants\UserRoles;
use App\Models\Auth;
use App\Models\Role;
use Laminas\Diactoros\Response\HtmlResponse;


class AuthController extends Controller
{
    public function showRegister(): HtmlResponse
    {

        if ($this->isLogged()) {
            header('Location: /');
        }

        return self::view('Auth/register.twig', []);
    }

    public function login(): HtmlResponse
    {

        if ($this->isLogged()) {
            header('Location: /');
        }

        return self::view('Auth/login.twig', []);
    }

    public function authenticate($request)
    {
        $auth = $this->getAuthenticatedUser($request);
        if (is_null($auth)) {
            return self::view('Auth/login.twig', ['errors' => ['Invalid credentials']]);
        }

        $_SESSION['user'] = $auth;

        $roles = array_map(function ($role) {
            return $role['role_name'];
        }, $auth->roles()->get()->toArray());

        header('Location: ' . UserRoles::matchRoute($roles));
    }

    private function isLogged(): bool
    {
        return isset($_SESSION['user']);
    }

    private function getAuthenticatedUser($request)
    {
        $request = $request->getParsedBody();
        if (is_null($auth = Auth::where('email', $request['user'])->first())) {
            $auth = Auth::where('username', $request['user'])->first();
        }

        if (is_null($auth)) {
            return null;
        }


        if (!password_verify($request['password'], $auth['password'])) {
            return null;
        }


        return $auth;
    }


    public function register($request): HtmlResponse
    {


        $data = $request->getParsedBody();
        if ($data['password'] == $data['password_confirm']) {
            $user = new Auth();
            $user->username = $data['username'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->save();
            $user->roles()->attach(Role::where('role_name', 'User'));
            return self::view('Auth/login.twig', []);
        } else {
            return self::view('Auth/register.twig', ['errors' => ['Passwords do not match', $data['password'], $data['password_confirm']]]);
        }
    }

    public function logout()
    {
        session_unset();
        unset($_SESSION['user']);
        header('Location: /register');

    }
}
