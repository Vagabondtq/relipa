<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class AuthController extends Controller
{

    public function index()
    {
        $user_repository = new UserRepository();

        $assign['list'] = $user_repository->all();

        return $this->view('auth/index', $assign);
    }
}