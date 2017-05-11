<?php

namespace App\Repositories\Contracts;


interface Repository
{

    public function all($columns = array('*'));

}