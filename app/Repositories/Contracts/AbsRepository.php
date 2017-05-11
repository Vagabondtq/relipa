<?php

namespace App\Repositories\Contracts;


abstract class AbsRepository implements Repository
{
    protected $table;

    protected $perPage = 15;
}