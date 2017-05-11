<?php

namespace App\Repositories;


use App\Repositories\Contracts\AbsRepository;

class UserRepository extends AbsRepository
{
    protected $table = 'users';
}