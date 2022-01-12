<?php

namespace App\Controllers;

use App\Models\Auth;
use Laminas\Diactoros\Response\HtmlResponse;


class AuthController extends Controller
{
    public function show_register(): HtmlResponse
    {
        return self::view('Auth/register.twig', []);
    }

    public function login(): HtmlResponse
    {
        return self::view('Auth/login.twig', []);
    }

    public function authenticate($request): HtmlResponse
    {
        $auth = $this->getAuthenticatedUser($request);

        if (is_null($auth)) {
            return self::view('Auth/login.twig', ['errors' => ['Invalid credentials']]);
        }

        $_SESSION['user'] = $auth;
        return self::view('index.twig', []);
    }

    private function getAuthenticatedUser($request)
    {
        $request = $request->getParsedBody();
        if (is_null($auth = Auth::where('email', $request['user'])->first())) {
            $auth = Auth::where('username', $request['user'])->first();
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
            return self::view('Auth/login.twig', []);
        } else {
            return self::view('Auth/register.twig', ['errors' => ['Passwords do not match', $data['password'], $data['password_confirm']]]);
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /register');

    }
}
